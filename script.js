window.onload = function () {
    var chart = new CanvasJS.Chart("chartContainer", {
        theme: "light2",
        animationEnabled: true,
        title: {
            text: "Indicadores de Pobreza Menstrual",
            fontFamily: "'Segoe UI', Tahoma, Geneva, Verdana, sans-serif"
        },
        axisY: {
            title: "Percentual (%)",
            suffix: "%"
        },
        data: [{
            type: "column",
            indexLabel: "{y}%",
            indexLabelPlacement: "outside",
            indexLabelFontWeight: "bold",
            indexLabelFontColor: "#3a0ca3",
            color: "#9d4edd",
            dataPoints: [
                { label: "População que menstrua", y: 30 },
                { label: "Sem banheiro em casa", y: 1.5 },
                { label: "Dificuldade nas escolas", y: 37 }
            ]
        }]
    });
    chart.render();
}

document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();

            const targetId = this.getAttribute('href');
            const targetElement = document.querySelector(targetId);

            if (targetElement) {
                const headerHeight = document.querySelector('header').offsetHeight;
                const targetPosition = targetElement.getBoundingClientRect().top + window.pageYOffset - headerHeight;

                window.scrollTo({
                    top: targetPosition,
                    behavior: 'smooth'
                });

                if (history.pushState) {
                    history.pushState(null, null, targetId);
                } else {
                    window.location.hash = targetId;
                }
            }
        });
    });
});