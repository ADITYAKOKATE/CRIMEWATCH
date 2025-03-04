import sqlite3

conn = sqlite3.connect('test.db')
print("Database opened successfully")

# Corrected CREATE TABLE statement
conn.execute("""
    CREATE TABLE anonymous_reports(
        id INTEGER PRIMARY KEY,
        crime_type TEXT NOT NULL,
        location TEXT NOT NULL,
        day_date TEXT NOT NULL,
        description TEXT NOT NULL
    )
""")

print("Table created successfully")
conn.close()
