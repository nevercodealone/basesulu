# Sulu base ddev project
Please clone it and run
```bash
$ ddev start
```

Import db dump when ddev is up
```bash
$ ddev import-db --src=basesulu.sql
```

Do composer install with ddev
```bash
$ ddev composer install
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
