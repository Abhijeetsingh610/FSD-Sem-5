var arr = [10,1];
arr.push(2)
arr.push(7)
arr.push(8)
arr.push(5)
arr.push(4)
arr.push(6)
arr.push(9)
arr.push(3)

console.log(arr)

arr.pop()
arr.pop()
arr.pop()

console.log(arr)

var arr2 = [1,2,3,4,5,6]
console.log(arr2.lenght)
console.log(arr2[3])
console.log(arr2[2])

//for loop
 for (let i= 0;i<arr2.length ;i++){
    console.log("index: " + i +" value : "+ arr2[i]);
    } 

var fruits =["Banana" , "Orange" , "Apple" , "Mango"]
console.log(fruits.shift())
fruits.unshift("Kiwi")
console.log(fruits)

fruits.splice(1 , 2 , "Valorant" , "LOL")
console.log(fruits)