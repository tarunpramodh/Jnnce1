function validateForm() {
    const name = document.getElementById("name").value;
    const phone = document.getElementById("phone").value;
    const classs = document.getElementById("classs").value;
    const trainnumber = document.getElementById("trainnumber").value;
    const checkInDatetime = document.getElementById("checkInDatetime").value;
    const departure_station = document.getElementById("departure_station").value;
    const destination_station = document.getElementById("destination_station").value;

  
    // Basic validation
    if (name === "") {
      alert("Please enter your name.");
      return false;
    }
  
    if (phone === "") {
      alert("Please enter your phone number.");
      return false;
    }
  
    if (classs === "") {
      alert("Please enter your classs.");
      return false;
    }
  
    if (trainnumber === "") {
      alert("Please enter your trainnumber");
      return false;
    }
  
    if (checkInDatetime === "") {
      alert("Please enter your checkInDatetime");
      return false;
    }
  
    if (departure_station === "") {
      alert("Please select your departure_station");
      return false;
    }

    if (destination_station === "") {
      alert("Please select your destination_station");
      return false;
    }
   
  
    // Additional validation (e.g., date range, room availability) can be added here
  
    return true;
  }