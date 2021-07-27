
sessionStorage.setItem('gawean', 'freelace');

	console.log(sessionStorage.getItem('gawean'));
	console.log(sessionStorage.getItem('stat'));

	var status = "notsubcribe";


	
	const subpopup = document.querySelector(".bg-modal");
	const close = document.querySelector(".close");
	const button = document.querySelector(".button");
	const alert = document.querySelector(".invmail")
	const succ = document.querySelector(".success")
	let email = document.querySelector('#email');
	window.addEventListener("load", function(){
		showpopup();
	})

	function showpopup() {
		const timelimit = 1;
		let i = 0;
        var subs = "notsubs";
        sessionStorage.setItem('stat', JSON.stringify(subs));

		const timer = setInterval(function(){
			i++;
			if(i == timelimit && subs == "notsubs"){
				clearInterval(timer);
				subpopup.classList.add("show")
			}
		},1000);
	}

	close.addEventListener("click", function(){
		subpopup.classList.remove("show");
	})

	button.addEventListener("click", function(){
		if (email.Value == null ) {
			alert.classList.add("show")
		} else {
			// location.replace('https://karetsatudio.com');
			subpopup.classList.remove("show");
			sessionStorage.setItem('stat', 'subscribe');
        	console.log(sessionStorage.getItem('stat'));
			
		}
		// let count = 1;
		// setInterval(() => {
		// 	count++;
		// 	if(count >3)location.replace('http://localhost/paradigm/index.html');
		// },1000)
		
	})