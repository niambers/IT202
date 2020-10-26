function fibonacciGenerator(n) {
  var start = 0;
  var increment = 1;
  var arrResult = [];
  //for loop
  for (var i = 0; i < n; i++){
    //add values to the array
    arrResult[i] = start;
    //makes the new value by adding
    //sum of the previous two 
    var newNum = start + increment;
    //changing values to be up to date
    start = increment;
    increment = newNum;
  }
  return arrResult;
}
//example from problem
fibonacciGenerator(3);