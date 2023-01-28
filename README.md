# DBMS Testing by NM

Type following command in your project folder to get updated from remote repo.

git pull origin main

## To Do List


- [ ] Make db seeder for each model

## completed
- [x] Added fields to models


## Input , Raw Query and Output

### Input

customers : 'customerNumber'
employees : 'employeenumber'

### Raw Query

select customerNumber, employeenumber from customer,employee

### Output

[
    {
        "customerNumber" : 1,
        "employeeNumber" : 1
    },
    {
        "customerNumber" : 3,
        "employeeNumber" : 2
    }
]

