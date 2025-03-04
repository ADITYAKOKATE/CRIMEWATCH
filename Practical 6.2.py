import sqlite3
conn=sqlite3.connect('test.db')
print("Database opened successfully")
conn.execute("INSERT INTO anonymous_reports VALUES(1,'Murder','Mumbai','12-May-2014','hbsdisvbisuosbovbdbvs');")
conn.execute("INSERT INTO anonymous_reports VALUES(2,'Rape','Pune','19-June-2024','hbsdisvbiscduosbovbdbvs')")
conn.execute("INSERT INTO anonymous_reports VALUES(3,'Thief','Munbai','11-Jan-2023','kdodbovbdbvs')")
conn.execute("INSERT INTO anonymous_reports VALUES(4,'Murder','UP','30-July-2021','hbsdisvbvsbovbdbvs')")
conn.commit()
conn.close()
