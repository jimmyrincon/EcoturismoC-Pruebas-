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
  documento: String
});

app.use(express.urlencoded({ extended: true }))
app.use(express.static(path.join(__dirname, 'public')));

app.get('/', function(req, res) {
  let person = new Person(req.body);
  person.save().then(() => {
    console.log('Uno');
    res.send({body: "sadfsad"});
  });

  console.log('Dos');
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