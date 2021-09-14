const express = require('express');
const path = require('path');

const app = express();
const errorController = require('./controllers/error.js');

const mongoose = require('mongoose');

app.set('view engine', 'ejs');
app.set('views', 'views');

/**
 * Se espécifica la estructura de la entidad
 * @type {Model<unknown>}
 */
const Person = mongoose.model('Person', {
  nombres: String,
  documento: String,
  genero: String,
  correo: String,
  telefono: String,
  ciudad: String,
  mensaje: String
});

app.use(express.urlencoded({ extended: true }));
app.use(express.static(path.join(__dirname, 'public')));

app.get('/', function(req, res) {
  Person.find().then((person) => {
    res.send(person);
  });
});

app.post('/registrar', function(req, res) {
  let person = new Person(req.body);
  person.save().then(() => {
    console.log('Uno');
    res.send({body: "sadfsad"});
  });
});


mongoose.connect('mongodb://node:node123@localhost:27017').then(result => {
   app.listen(3005);
}).catch(err => {
  console.log(err);
});