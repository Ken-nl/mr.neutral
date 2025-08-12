<?php
const AI_DAILY_LIMIT = 100; // 1日の最大コール数（検証用）

function ai_can_call() {
  $today = gmdate('Y-m-d');
  $data  = get_transient('ai_daily_calls') ?: ['date'=>$today, 'count'=>0];
  if ($data['date'] !== $today) { $data = ['date'=>$today, 'count'=>0]; }
  if ($data['count'] >= AI_DAILY_LIMIT) { return false; }
  $data['count']++;
  set_transient('ai_daily_calls', $data, DAY_IN_SECONDS);
  return true;
}

add_filter('http_request_args', function($args, $url){
  if (strpos($url, 'api.openai.com') !== false ||
      strpos($url, 'generativelanguage.googleapis.com') !== false) {
    if (!ai_can_call()) {
      return new WP_Error('ai_limit', 'AI call limit reached (Local)');
    }
  }
  return $args;
}, 9, 2);
