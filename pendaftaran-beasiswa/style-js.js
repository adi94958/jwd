//objek section
const section1 = document.getElementById('section1');
const section2 = document.getElementById('section2');
const section3 = document.getElementById('section3');

//objek button
const nextsection1 = document.getElementById('btn-section1');
const nextsection2 = document.getElementById('btn-section2');
const nextsection3 = document.getElementById('btn-section3');

//section 1
nextsection1.addEventListener('click', function() {
    section1.style.display = 'block';
    section2.style.display = 'none';
    section3.style.display = 'none';
    nextsection1.classList.add('active');
    nextsection2.classList.remove('active');
    nextsection3.classList.remove('active');
});

//section 2
nextsection2.addEventListener('click', function() {
    section1.style.display = 'none';
    section2.style.display = 'block';
    section3.style.display = 'none';
    nextsection1.classList.remove('active');
    nextsection2.classList.add('active');
    nextsection3.classList.remove('active');
});

const semester = document.getElementById('inputSemester');
const beasiswa = document.getElementById('inputBeasiswa');
const file = document.getElementById('inputFile');
const daftar = document.getElementById('daftar');

function randomIpk() {
    const minValue = 2.7;
    const maxValue = 3.3;
    const randomDecimalInRange = Math.random() * (maxValue - minValue) + minValue;
    return randomDecimalInRange.toFixed(2);
}

semester.addEventListener('input', function() {
    if (semester.value !== '0') {
        const ipkDisabled = document.getElementById('inputIpk-disabled');
        const ipk= document.getElementById('inputIpk');
        ipkDisabled.value = randomIpk();
        ipk.value = ipkDisabled.value;
        if (parseFloat(ipkDisabled.value) >= 3) {
            file.removeAttribute('disabled');
            beasiswa.removeAttribute('disabled');
            daftar.removeAttribute('disabled');
        } else {
            file.setAttribute('disabled', 'true');
            beasiswa.setAttribute('disabled', 'true');
            daftar.setAttribute('disabled', 'true');
        }

    }
});     