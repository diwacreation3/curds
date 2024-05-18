# CURD Application Php MySql
The CRUD acronym comprises all the major operations that are performed on a relations database. It stands for: 

1.  C (Create): You will insert records into MySQL table Using PHP and MySQLi Procedural.   

1. R (Read): You will fetch records from the MySQL table and display them in HTML Table Using PHP and MySQLi Procedural.

1. U (Update): You will update records in the MySQL table Using PHP and MySQLi Procedural. 

1. D (Delete): You will delete records from the MySQL table Using PHP and MySQLi Procedural.

## SQL Code to create tables 

```sql
CREATE TABLE students (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL,
    age INT,
    email VARCHAR(50),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```

