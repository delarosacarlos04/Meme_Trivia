// load operations.js file so functions can be imported
const operations = require('./operations.js');

// load built-in assert function to test
const assert = require('assert');


// first test: check if a string is entered
it('successfully runs if a string is entered', () =>{
    assert.equal(operations.validateString('string'), true);
});

it('successfully runs if a string is entered', () =>{
    assert.equal(operations.validateString(7), false);
});

it('successfully runs if a string is entered', () =>{
    assert.equal(operations.validateString(true), false);
});


// second test: check if boolean is entered for T/F questions
it('successfully runs if a boolean is entered', () =>{
   assert.equal(operations.booleanAnswer('T'), true); 
});

it('successfully runs if a boolean is entered', () =>{
   assert.equal(operations.booleanAnswer('f'), true); 
});

it('successfully runs if a boolean is entered', () =>{
   assert.equal(operations.booleanAnswer('string'), false); 
});