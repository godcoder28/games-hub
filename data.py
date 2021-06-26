import cgi
form = cgi.FieldStorage()
with open ('data.txt','w+') as fileOutput:
    fileOutput.write(form.getValue('name'))
    fileOutput.write(form.getValue('email'))