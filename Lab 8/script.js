function calcavg() {
    // 1. Alias document.getElementById
    let $ = document.getElementById.bind(document);
    
    // 2. Correctly retrieve and parse the input values as numbers
    let m1 = parseFloat($('m1').value);
    let m2 = parseFloat($('m2').value);
    let m3 = parseFloat($('m3').value);

    // 3. Proper NaN validation check
    if (isNaN(m1) || isNaN(m2) || isNaN(m3)) {
        alert("Please fill in all fields with valid numbers.");
        return; 
    }

    // 4. Find the minimum value using Math.min
    let min = Math.min(m1, m2, m3);

    // 5. Calculate total (subtracting the minimum to get the best 2 out of 3)
    let total = m1 + m2 + m3 - min;

    // 6. Calculate average of the best 2
    let avg = total / 2;

    // 7. Alert the result using a template literal
    alert(`Avg = ${avg}`);
}
