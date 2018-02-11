
<h1 align="center">
  <i>Notes</i>
</h1>
<br>
<h4 align="center">
Notes is a simple PHP tool to help implement basic Markdown based blogging into any website.
</h4>

<p align="center">
  <a href="#key-features">Key Features</a> •
  <a href="#how-to-setup">How To Setup</a> •
  <a href="#how-to-use">How To Use</a> •
  <a href="#credits">Credits</a> •
  <a href="#license">License</a>
</p>
<!-- <p align="center">
<img src="https://raw.githubusercontent.com/blacksector/ionic3-firebase-starter/master/screenshots/login.png" alt="Markdownify" width="200">
<img src="https://raw.githubusercontent.com/blacksector/ionic3-firebase-starter/master/screenshots/home.png" alt="Markdownify" width="200">
<img src="https://raw.githubusercontent.com/blacksector/ionic3-firebase-starter/master/screenshots/sideMenu.png" alt="Markdownify" width="200">
</p> -->

## Key Features

* Flat-file
  - The entire framework is built to be a drop in replacement. You don't need to
  connect a database or have any fancy tools.
* Markdown
  - The framework uses Markdown as the main blogging tool.


## How To Setup

To clone and run this application, you'll need Apache (mod_rewrite enabled) and PHP installed on a server. If you are using a Windows computer for testing, I suggest using [XAMPP](https://www.apachefriends.org/download.html).

From your command line:

```bash
# Clone this repository
$ git clone https://github.com/blacksector/notes

# Go into the repository
$ cd notes
```

Place the notes directory in an existing website or use it as your website root.


Modify the `config.php` file to your liking.

Default:
```php
// Website name prepended to title in templates.
define('WEBSITE_NAME', 'My Notes');
// File format, Notes will still parse Markdown.
define('FILE_FORMAT', '.md');

// Template to use? This is just a directory to the template.
define('TEMPLATE', 'bootstrap');
```

Sample:
```php
// Website name prepended to title in templates.
define('WEBSITE_NAME', 'My Personal Blog');
// File format, Notes will still parse Markdown.
define('FILE_FORMAT', '.md');

// Template to use? This is just a directory to the template.
define('TEMPLATE', 'bootstrap');
```

## How To Use

#### Sample Post/Page
Creating a post is simple. Inside of the `posts` folder go ahead and create a file, name it anything you like and then add your markdown content.

File: sample.md

Content:
```markdown
# Sample Page!
```

Visit your web url now and append a `/sample` to the end of the url like this: https://example.com/sample

#### URLs
Need custom URLs? A sample is provided in the folder `/posts/2018/02/`. When you visit the `hello-world` post in your browser you would have to access it like so: https://example.com/2018/02/hello-world. Create folders based on your date, category or any other way you want. This framework was meant to be made SIMPLE.


## Credits

This framework uses a lot of open source packages and implements third-party API(s)

- [Singularity CMS](https://github.com/csu/singularity-cms)
- [Bootstrap 4](https://getbootstrap.com) - The `bootstrap` template.
- [Parsedown](https://github.com/erusev/parsedown)

Project is inspired by and a re-write of [Singularity CMS](https://github.com/csu/singularity-cms).

README inspired by: [Electron Markdownify](https://github.com/amitmerchant1990/electron-markdownify)

## License

MIT

---

> [quazi.co](https://quazi.co) &nbsp;&middot;&nbsp;
> GitHub [blacksector](https://github.com/blacksector) &nbsp;&middot;&nbsp;
> Instagram [@quaziomar](https://instagram.com/quaziomar)
