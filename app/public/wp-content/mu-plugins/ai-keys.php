<?php
add_filter('wpbot_openai_api_key', fn($k) => defined('OPENAI_API_KEY') ? OPENAI_API_KEY : $k);
add_filter('wpbot_gemini_api_key', fn($k) => defined('GEMINI_API_KEY') ? GEMINI_API_KEY : $k);
