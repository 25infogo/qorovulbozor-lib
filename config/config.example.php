<?php
return [
    'app' => ['name'=>'QOROVULBOZOR LIB','base_url'=>'https://qorovulbozor-lib.uz','timezone'=>'Asia/Tashkent','default_lang'=>'uz','session_name'=>'QOROVULBOZORLIBSESSID','debug'=>false,'demo_mode'=>false],
    'db' => ['host'=>'localhost','port'=>3306,'name'=>'library_pro','user'=>'library_user','pass'=>'CHANGE_ME','charset'=>'utf8mb4'],
    'security' => ['app_key'=>'CHANGE_TO_64_RANDOM_HEX_CHARS','otp_ttl_seconds'=>120,'otp_resend_seconds'=>60,'otp_max_attempts'=>5,'login_max_attempts'=>7,'login_lock_minutes'=>15],
    'telegram' => ['bot_token'=>'','admin_chat_id'=>''],
    'sms' => ['provider'=>'disabled','url'=>'','bearer_token'=>'','sender'=>'QBLIB'],
    'click' => ['enabled'=>false,'service_id'=>'','merchant_id'=>'','merchant_user_id'=>'','secret_key'=>'','payment_url'=>'https://my.click.uz/services/pay'],
    'payme' => ['enabled'=>false,'merchant_id'=>'','login'=>'Paycom','key'=>'','checkout_url'=>'https://checkout.paycom.uz'],
];
