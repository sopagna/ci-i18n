
# ci-i18n
Translation library for CodeIgniter

### Installation
Copy all files in application folder to your application folder of your CodeIgniter project

### Configuration
Update the configuration file in **config/ci_i18n.php**

- Add the languages in this array
``
$config['languages'] = ['en' => 'english', 'fr' => 'french'];
``

- Set the default language of your application (if there is no default language is set, the first language in **$config['languages']** will be used as default)
``
$config['default_language'] = 'en';
``

- Set the language files that need to load every time
``
$config['default_language_file'] = ['global'];
``

- Specify the url that won't be redirect with language
``
$config['special_uri'] = ['login', 'logout'];
``

- Set cookie (whether to save selected language to cookie or not)

    ```
    $config['use_cookie'] = TRUE;
    $config['cookie_name'] = 'ci_i18n_language';
    $config['cookie_expiration'] = 604800; //7 Day
    $config['cookie_domain'] = '';
    $config['cookie_path'] = '/';
    $config['cookie_prefix'] = '';
    $config['cookie_secure'] = FALSE;
    $config['cookie_httponly'] = FALSE;
    ```

### Usage
Add the language file in **language** folder.
**Example**
> language/english/welcome_lang.php
> language/french/welcome_lang.php

First you need to load the library and some helpers.
In config file **config/autoload.php**
```
$autoload['libraries'] = array('ci_i18n');
$autoload['helper'] = array('url', 'cookie', 'ci_i18n');
```

Then you will be able to access some function:

- load(array filenames) : Load language file
- getLanguages() : Load all languages that you set in your config file
- appLang() : get current language
- switchLanguage(string $lang): return url with language
- site_url($uri = '', $protocol = NULL)
- anchor($uri = '', $title = '', $attributes = '')

**Example**
```$this->ci_i18n->load(['welcome'])```

**Note**: By loading the **ci_i18n** helper, you can access a helper function for translation
```
_t($key, $param = '') 
```

### Acknowledgments
- CodeIgniter i18n library by Jérôme Jaglale
