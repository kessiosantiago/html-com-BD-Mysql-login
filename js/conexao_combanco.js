module.exports = function(app){
    
    
    var mysql = required('mysql');
    var connection = mysql.createConnetion({
        host :'localhost',
        user : 'root',
        password : 'jk100991',
        database : 'formulario'
    });

    app.get('insert)

};