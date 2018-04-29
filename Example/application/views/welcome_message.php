<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
        
    #header {
        display: flex;
        border-bottom: 1px solid #D0D0D0;
        align-items: center;
    }    
    #header h1 {
		color: #444;
		background-color: transparent;
		font-size: 19px;
		font-weight: normal;
		margin: 0;
		padding: 14px 15px 10px 15px;
        flex-grow: 1;
	}
    #header .language {
        padding: 0 15px;
    }
    #header .language a:not(:last-child):after {
        content: '|';
        display: inline-block;
        padding: 0 5px;
    }
	</style>
</head>
<body>

<div id="container">
    <div id="header">
        <h1><?php echo _t('global.header'); ?></h1>
        <div class="language">
            <?php echo _t('global.language'); ?>:&nbsp;&nbsp;
            <?php foreach($this->ci_i18n->getLanguages() as $code => $name) { ?>
                <a href="<?php echo $this->ci_i18n->switchLanguage($code); ?>"><?php echo _t('global.'.$name); ?></a>
            <?php } ?>
        </div>
	</div>

	<div id="body">
		<p><?php echo _t('welcome.line1'); ?></p>

		<p><?php echo _t('welcome.line2'); ?></p>
		<code>application/views/welcome_message.php</code>

		<p><?php echo _t('welcome.line3'); ?></p>
		<code>application/controllers/Welcome.php</code>

		<p><?php echo _t('welcome.line4'); ?> <a href="user_guide/"><?php echo _t('welcome.user_guide'); ?></a>.</p>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

</body>
</html>