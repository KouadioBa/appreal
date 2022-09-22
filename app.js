// constant
const sqlite3 = require('sqlite3')
const dbName = 'studentData.db'

// Opening Database
let db = new sqlite3.Database(dbName, err => {
    if (err)
        throw err

    console.log('Database stated on'+ ' ' + dbName)
})

const sql = 'SELECT*FROM eleves'
db.all(sql, [], (err, rows) => {
    rows.forEach((row) => {
        console.log(row)
    })
})