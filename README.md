Simple project management tool using PHP, Doctrine, MySQL and Docker.

1. Clone repo
2. cd into project folder and run
    docker-compose up
3. When running for the first time execute this command after the database is finished loading:
    docker exec -it pm-www sh -c "vendor/bin/doctrine orm:schema-tool:create"