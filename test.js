//Load operations.js file so functions can be imported
const operations = require('./operations.js');

//Load built-in assert function to test
const assert = require('assert');


//First test: check if a string is entered
it('successfully runs if a string is entered', () =>{
    
    assert.equal(operations.validateString('string'), true);
});