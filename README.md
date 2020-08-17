# Sulu base ddev project
Please clone it and run
```bash
$ ddev start
```

## Sulu Symfony Video Tutorials
Tutorial series in playlist

[Fullstack Tutorial Never Code Alone](https://www.youtube.com/playlist?list=PLKrKzhBjw2Y_bsIrig7rNLCXgZyYGMRgH)

[How to build a website from scratch in 2 hours - PHP Tutorial Sulu CMS PhpStorm best practice DDEV](https://youtu.be/9vGdmI8zz0s)

Import db dump when ddev is up
```bash
$ ddev import-db --src=basesulu.sql
```

Do `composer install` and `yarn install` with ddev
```bash
$ ddev composer install && ddev exec yarn install
```

Webpack
```bash
$ ddev exec yarn encore dev
$ ddev exec yarn encore dev --watch
$ ddev exec yarn encore production
$ ddev exec yarn add jquery popper.js --dev   
```


Run composer commands in the web container for db environment to add new packages
```bash
$ ddev ssh --service web   
```

Testing with Codeception with a local Selenium server
Run all tests
```bash
$ vendor/bin/codecept run --steps -vvv   
```
Run acceptance tests
```bash
$ vendor/bin/codecept run acceptance --steps -vvv   
```
Run integration tests
```bash
$ vendor/bin/codecept run integration --steps -vvv   
```
Run single test
```bash
$ vendor/bin/codecept run acceptance form/contactCest:emailIsRequired --steps -vvv 
```

Db pitfail - DDEV has a dynamic db port check "docker ps" and set the port on .env file 
