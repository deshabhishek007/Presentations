

console.log("Welcome to DevTools Console!");

// // Styling Console Log
	console.log ("%c some text","font-size:40px; color:red;")

// // Console Error
 	console.error("Something Went Wrong!");

// // Console Warning
 	console.warn("Who cares about them!");

// // Console Information
 	console.info("Like we read them!");

// // Console Debug Information
// // Enable Verbose Level for Debug messages
 	console.debug("Why This Kolaveri Di!");

// // Console Assert
 	console.assert(!true, 'This is not true');
 	console.assert(true, 'This is true'); // Won't Display

	var x = 1, y = 2, z = x+y;
	console.assert( z != 3,"Value of Variable z is 3");

// Clear Console
	 console.clear();

// Creating an Array
	var emp = [
		["Rahul","20","M"],
		["Raima","22","F"],
		["Radha","24","F"],
		["Reena","20","F"]
	];
	// console.log(emp);
	  console.table(emp);

	// // Group Data
	// emp.forEach(function(entry) {
 //    	console.group("Emp Name: "+entry[0]);
 //    		console.info("Age: "+entry[1]);
 //    		console.info("Gender: "+entry[2]);
 //    	console.groupEnd("Emp Name: "+entry[0]);
	// });

	// // Collapsed Group Data
	// emp.forEach(function(entry) {
 //    	console.groupCollapsed("Emp Name: "+entry[0]);
 //    		console.info("Age: "+entry[1]);
 //    		console.info("Gender: "+entry[2]);
 //    	console.groupEnd("Emp Name: "+entry[0]);
	// });



	// Timer
	console.time("fetching Posts");
	fetch('https://2018.mumbai.wordcamp.org/wp-json/wp/v2/posts')
	.then(data => data.json())
	.then(data =>{
		console.timeEnd("fetching Posts");
		console.log(data);
	})

	// Count Number of Attendees on WC Mumbai Website
	// https://2018.mumbai.wordcamp.org/attendees/
		// $$(".tix-attendee-name");

	// - Console Settings
	// 	- Network
	// 	- XMLHTTPRequests
	// 	- Show TimeStamps
	// 	- Preserve log
