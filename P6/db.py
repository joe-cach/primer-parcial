import mysql.connector

conexion1=mysql.connector.connect(host="localhost", 
                                  user="root", 
                                  passwd="", 
                                  database="bdpython")
cursor1=conexion1.cursor()
sql="insert into estudiantes(nombre, apellido, dpto, fnac) values (%s,%s,%s,%s)"
datos=("joseph", "cacharani", "OR", 10/4/1990)
cursor1.execute(sql, datos)
datos=("jose", "cach", "TA", 10/4/1990)
cursor1.execute(sql, datos)
datos=("joe", "cacha", "LP", 10/4/1990)
cursor1.execute(sql, datos)
conexion1.commit()
conexion1.close() 