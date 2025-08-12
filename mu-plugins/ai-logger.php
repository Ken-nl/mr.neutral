<?php
function ai_log($line) {
  $dir = WP_CONTENT_DIR . '/ai-logs';
  if (!is_dir($dir)) { wp_mkdir_p($dir); }
  error_log('['.gmdate('c').'] '.$line.PHP_EOL, 3, $dir.'/ai-'.gmdate('Ymd').'.log');
}

add_filter('http_request_args', function($args, $url){
  if (strpos($url, 'api.openai.com') !== false) ai_log('OPENAI call');
  if (strpos($url, 'generativelanguage.googleapis.com') !== false) ai_log('GEMINI call');
  return $args;
}, 11, 2);
