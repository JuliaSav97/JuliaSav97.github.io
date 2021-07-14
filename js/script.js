let target_date = new Date(2021,7,14).getTime()
let title = ['дней', 'часов', 'минут', 'секунд']

setInterval( () => { document.getElementById('current_date_time_block').innerHTML = date_time() }, 1000)
function date_time(){
 
    let arr = [], time = ''
    let current_date = new Date().getTime();
    let seconds_left = (target_date - current_date) / 1000;
 
    arr[0] = pad( parseInt(seconds_left / 86400) );
    seconds_left = seconds_left % 86400;
          
    arr[1] = pad( parseInt(seconds_left / 3600) );
    seconds_left = seconds_left % 3600;
           
    arr[2] = pad( parseInt(seconds_left / 60) );
    arr[3] = pad( parseInt( seconds_left % 60 ) );

    arr.forEach((item, i) => time += `<div> <p>${item}</p> <span> ${title[i]} </span> </div>`)

    return time
}
 
function pad(n) {
    return (n < 10 ? '0' : '') + n;
}