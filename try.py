import mysql.connector

# Connect to MySQL server
conn = mysql.connector.connect(
    host="localhost",
    user="your_username",
    password="your_password"
)

# Create a cursor object to execute SQL queries
cursor = conn.cursor()

# Create the database
cursor.execute("CREATE DATABASE IF NOT EXISTS crime_reports")

# Switch to the newly created database
cursor.execute("USE crime_reports")

# Create a table to store the anonymous reports
cursor.execute("""
    CREATE TABLE IF NOT EXISTS anonymous_reports (
        id INT AUTO_INCREMENT PRIMARY KEY,
        crime_type VARCHAR(255) NOT NULL,
        location VARCHAR(255) NOT NULL,
        day_date VARCHAR(255) NOT NULL,
        description TEXT NOT NULL
    )
""")

# Commit the changes and close the connection
conn.commit()
conn.close()

print("Database and table created successfully.")
