 # PM

Simple project management tool created with PHP, Doctrine, MySQL and Docker.

## Installation

Clone repo, cd into the project folder and run

```bash
docker-compose up -d
```

When running for the first time, execute this command after the database is finished loading

```bash
docker exec -it pm-www sh -c "vendor/bin/doctrine orm:schema-tool:create"
```
