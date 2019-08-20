<?php 
/*
 /*
 *	Made by Samerton
 *	Translation  by Hi_Michael
 *  https://github.com/NamelessMC/Nameless/
 *  NamelessMC version 2.0.0-pr4
 *
 *  License: MIT
 *
 *  Chinese Language - Users
 *  Translation progress : 97%
 *  翻译有误请使用GitHun回报issues 
 *  https://github.com/haer0248/NamelessMC-v2-Traditional-Chinese/issues
 */

$language = array(
	/*
	 *  Change this for the account validation message
	 */
	'validate_account_command' => 'To complete registration, please execute the command <strong>/validate {x}</strong> ingame.', // Don't replace {x}

	/*
	 *  User Related
	 */
	'guest' => '游客',
	'guests' => '游客',
	
	// UserCP
	'user_cp' => '使用者后台',
	'user_cp_icon' => '<i class="fa fa-cogs" aria-hidden="true"></i>',
	'overview' => '总览',
	'user_details' => '使用者资讯',
	'profile_settings' => '个人档设定',
	'successfully_logged_out' => '成功登出.',
	'messaging' => '讯息',
	'click_here_to_view' => '点击查看.',
	'moderation' => 'Moderation',
	'administration' => '管理者',
	'alerts' => '提醒',
	'delete_all' => '移除全部',
	'private_profile' => 'Private profile',
	
	// Profile settings
	'field_is_required' => '需要 {x}.', // Don't replace {x}
	'settings_updated_successfully' => '设定更新成功.',
	'password_changed_successfully' => '密码更新成功.',
	'change_password' => '更换密码',
	'current_password' => '目前密码',
	'new_password' => '新密码',
	'confirm_new_password' => '确认新密码',
	'incorrect_password' => '密码错误.',
	'two_factor_auth' => 'TFA 二次验证',
	'enabled' => 'Enabled',
	'disabled' => 'Disabled',
	'enable' => '启用',
	'disable' => '禁用',
	'tfa_scan_code' => '请在APP中扫描以下QR Code:',
	'tfa_code' => '如果你的手机没有相机镜头可以扫描QR Code，请输入以下代码:',
	'tfa_enter_code' => '请在APP中输入显示的代码:',
	'invalid_tfa' => '代码错误，请重试.',
	'tfa_successful' => 'TFA二次验证设定成功. 每次登入时必须二次验证才能登入成功.',
	'active_language' => '启用语言',
	'timezone' => '时区',
	'upload_new_avatar' => '上传新的头像',
	'nickname_already_exists' => 'Your chosen nickname already exists.',
	'change_email_address' => 'Change Email Address',
	'email_already_exists' => 'The email address you have entered already exists.',
	'email_changed_successfully' => 'Email address changed successfully.',
	'avatar' => 'Avatar',
	'profile_banner' => 'Profile Banner',
	'upload_profile_banner' => 'Upload Profile Banner',
	'upload' => 'Upload',
	
	// Alerts
	'user_tag_info' => '你被标注于 {x}.', // Don't replace {x}
	'no_alerts' => '没有新提醒',
	'view_alerts' => '检视提醒',
	'1_new_alert' => 'You have 1 new alert',
	'x_new_alerts' => '你有 {x} 个新提醒', // Don't replace {x}
	'no_alerts_usercp' => '你没有任何提醒.',
	
	// Registraton
	'registration_check_email' => '感谢您的注册! 请检查你的电子邮件来完成注册动作. 如果你没有收到信请检查垃圾信箱.',
	'username' => '帐号',
	'nickname' => '暱称',
	'minecraft_username' => 'Minecraft Username (游戏名称)',
	'email_address' => '电子邮件位置',
	'email' => '电子邮件',
	'password' => '密码',
	'confirm_password' => '确认密码',
	'i_agree' => '我同意',
	'agree_t_and_c' => '按下<strong class="label label-primary">注册</strong>后，你就同意<a href="{x}" target="_blank">使用条款</a>.',
	'create_an_account' => '建立帐号',
	'terms_and_conditions' => '使用条款',
	'validation_complete' => '你的帐户已被验证，你现在可以登入.',
	'validation_error' => '验证失败，请联络网站管理员.',
	'signature' => '签名档',
	'signature_max_900' => '你的签名档字元超过900字.',

	// Registration - Authme
    'connect_with_authme' => '使用AuthMe连接帐户',
	'authme_help' => '请输入在游戏中的AuthMe帐户资讯. 如果你没有帐号，请依照伺服器给予的说明操作.',
	'unable_to_connect_to_authme_db' => '无法连线至AuthMe资料库，如果错误仍然存在，请连接网站管理员.',
	'authme_account_linked' => '帐户连接成功.',
	'authme_email_help_1' => '完成，请输入电子邮件.',
	'authme_email_help_2' => '完成，请输入电子邮件和选取帐户名.',
	
	// Registration errors
	'username_required' => '帐号是必须的.',
	'email_required' => '电子邮件是必须的.',
	'password_required' => '密码是必须的.',
	'mcname_required' => 'Minecraft username(游戏名称) 是必须的.',
	'accept_terms' => '你必须接受服务条款.',
	'username_minimum_3' => '帐号最底限制 3 字元.',
	'mcname_minimum_3' => 'Minecraft username (游戏名称) 最低限制 3 字元.',
	'password_minimum_6' => '密码最低限制 6 字元.',
	'username_maximum_20' => '帐号限制最高 20 字元.',
	'mcname_maximum_20' => 'Minecraft username (游戏名称) 最高限制 30 字元.',
	'password_maximum_30' => '密码最高限制 30 字元.',
	'passwords_dont_match' => '密码不相同.',
	'username_mcname_email_exists' => '帐号或电子邮件已存在.',
	'invalid_mcname' => 'Minecraft username 不相符 (非正版).',
	'invalid_email' => '电子邮件不正确.',
	'mcname_lookup_error' => '目前无法连接到 Moajng 伺服器，请稍等再试.',
	'invalid_recaptcha' => '无效的 reCAPTCHA.',
	'verify_account' => '验证帐号',
	'verify_account_help' => '请依照下列的说明来验证 Minecraft 帐户为您所有.',
	'validate_account' => 'Validate Account',
	'verification_failed' => '验证失败，请重试.',
	'verification_success' => '成功验证，已可以登入.',
	'authme_username_exists' => '你的 AuthMe 帐号已存在，请直接登入',
	'uuid_already_exists' => 'Your UUID already exists, meaning this Minecraft account has already registered.',
	
	// Login
	'successful_login' => '登入成功.',
	'incorrect_details' => '部分资料输入错误.',
	'inactive_account' => ' 帐户已启动. 请点击电子邮件验证信，或许会在垃圾桶.',
	'account_banned' => '帐户已被封禁.',
	'forgot_password' => '忘记密码?',
	'remember_me' => '记住我',
	'must_input_email' => 'You must input an email address.',
	'must_input_username' => '你必须输入帐号.',
	'must_input_password' => '你必须输入密码.',

	// Forgot password
    'forgot_password_instructions' => '请输入你的电子邮件让我们可以在你忘记密码时寄一封信给你重设密码.',
	'forgot_password_email_sent' => '如果该帐号已有电子邮件，则已发送包含进一步的说明. 如果你没看到，请检查你的垃圾桶.',
	'unable_to_send_forgot_password_email' => '无法传送忘记密码电子邮件，请联络网站管理员.',
	'enter_new_password' => '请确认你的电子邮件并在下面输入密码.',
	'incorrect_email' => '电子邮件错误.',
	'forgot_password_change_successful' => '密码变更成功，你可以登入了.',
	
	// Profile pages
	'profile' => '个人档',
	'follow' => '追随',
	'no_wall_posts' => '这个人的涂鸦牆没有东西.',
	'change_banner' => '更换横幅',
	'post_on_wall' => '涂鸦牆上有 {x} 篇文章', // Don't replace {x}
	'invalid_wall_post' => '请输入 1 ~ 10000 个字元的文章内容.',
	'1_reaction' => '1 个回应',
	'x_reactions' => '{x} 个回应', // Don't replace {x}
	'1_like' => '1 个讚',
	'x_likes' => '{x} 个讚', // Don't replace {x}
	'1_reply' => '1 个回覆',
	'x_replies' => '{x} 个回覆', // Don't replace {x}
	'no_replies_yet' => '这边没有回覆',
	'feed' => '回馈',
	'about' => '关于',
	'reactions' => '回应',
	'replies' => '回覆',
	'new_reply' => '新回覆',
	'registered' => '已注册:',
	'registered_x' => '已注册: {x}',
	'last_seen' => '上次上线:',
	'new_wall_post' => '{x} 在你的涂鸦牆上发文.',
	'couldnt_find_that_user' => '找不到使用者.',
	'block_user' => '封锁使用者',
	'unblock_user' => '解锁使用者',
	'confirm_block_user' => '你要封锁这位使用者吗？如果封锁了他将会无法传送私人讯息与在文章标注你.',
	'confirm_unblock_user' => '你要解锁这位使用者吗？如果解锁了他将可以传送私人讯息与在文章标注你.',
	'user_blocked' => '使用者封锁.',
	'user_unblocked' => '使用者解锁.',
	'views' => 'Profile Views:',
	'private_profile_page' => 'This is a private profile!',
	'new_wall_post_reply' => '{x} has replied to your post on {y}\'s profile.', // Don't replace {x} or {y}
	'new_wall_post_reply_your_profile' => '{x} has replied to your post on your profile.', // Don't replace {x}
	'no_about_fields' => 'This user has not added any about fields yet.',
	'reply' => 'Reply',
	
	// Reports
	'invalid_report_content' => '无法建立回报. 请确认你输入的内容有在 2-1024 字元以内.',
	'report_post_content' => '请输入内容',
	'report_created' => '回报建立成功',
	
	// Messaging
	'no_messages' => '没有新讯息',
	'no_messages_full' => '你没有新讯息.',
	'view_messages' => '查看讯息',
	'1_new_message' => 'You have 1 new message',
	'x_new_messages' => '你有 {x} 则新讯息', // Don't replace {x}
	'new_message' => '新讯息',
	'message_title' => '讯息标题',
	'to' => 'To',
	'separate_users_with_commas' => '使用「,」区分使用者',
	'title_required' => '请输入标题',
	'content_required' => '请输入内容',
	'users_to_required' => '请输入使用者名称',
	'cant_send_to_self' => '你不能传讯息给自己!',
	'title_min_2' => '标题最低限制 2 字元',
	'content_min_2' => '内文最低限制 2 字元',
	'title_max_64' => '标题最高限制 64 字元',
	'content_max_20480' => '内文最高限制 20480 字元',
	'max_pm_10_users' => '最多只能传给 10位 使用者',
	'message_sent_successfully' => '讯息传送成功',
	'participants' => '参与者',
	'last_message' => '最后的讯息',
	'by' => 'by',
	'leave_conversation' => '离开对话',
	'confirm_leave' => '你要离开对话吗?',
	'one_or_more_users_blocked' => '你无法传送私人对话，因为有使用者封锁你.',
	'messages' => 'Messages',
	
	/*
	 *  Infractions area
	 */
	'you_have_been_banned' => '你已被封禁!',
	'you_have_received_a_warning' => '你已收到警告!',
	'acknowledge' => '确认',
	
	/*
	 *  Emails
	 */
	'email_greeting' => '嗨,',
	'email_message' => '感谢您的注册，请点击下列的网址来完成验证:',
	'forgot_password_email_message' => '点击下列网址莱完成忘记密码恢复，如果您没有传送忘记密码，请移除本邮件.',
	'email_thanks' => '谢谢,',

	/*
	 *  Hooks
	 */
	'user_x_has_registered' => '{x} has joined ' . SITE_NAME . '!'
);