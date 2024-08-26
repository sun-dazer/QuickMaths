let numRight = 0;
const key = ['c','d','d','b','a','b','d', 'b', 'c', 'b'];

function checkAnswer()
{
    answers = (document.querySelectorAll('input:checked')); //nodeList that holds checked elements
    if (answers.length < 10) //if not all answers are answered
    {
        window.alert("Please answer all questions!");
    }
    else //if all are answered
    {
        for (let i = 0; i < 10; i++)
        {
            if(key[i]==answers[i].value) 
            {
                numRight++;
            }
        }
        let a = String(numRight);
        document.getElementById('result').innerHTML = "You got " + a + " questions correct!";
        localStorage.setItem('correct', numRight );
        numRight=0; //reset 
    }

    check1();
    check2();
    check3();
    check4();
    check5();
    check6();
    check7();
    check8();
    check9();
    check10();
}

function check1()
{
    if(key[0] == answers[0].value) 
    {
        document.getElementById("header1").style.color = '#bfd9be';
        document.getElementById("q1c").style.color = "#bfd9be";
    }
    else
    {
        document.getElementById("header1").style.color = "#FAA0A0";
    }

}

function check2()
{
    if(key[1] == answers[1].value) 
    {
        document.getElementById("header2").style.color = '#bfd9be';
        document.getElementById("q2d").style.color = "#bfd9be";
    }
    else
    {
        document.getElementById("header2").style.color = '#FAA0A0';
    }
}

function check3()
{
    if(key[2] == answers[2].value) 
    {
        document.getElementById("header3").style.color = '#bfd9be';
        document.getElementById("q3d").style.color = "#bfd9be";
    }
    else
    {
        document.getElementById("header3").style.color = '#FAA0A0';
    }

}

function check4()
{
    if(key[3] == answers[3].value) 
    {
        document.getElementById("header4").style.color = '#bfd9be';
        document.getElementById("q4b").style.color = "#bfd9be";
    }
    else
    {
        document.getElementById("header4").style.color = '#FAA0A0';
    }
}

function check5()
{
    if(key[4] == answers[4].value) 
    {
        document.getElementById("header5").style.color = '#bfd9be';
        document.getElementById("q5a").style.color = "#bfd9be";
    }
    else
    {
        document.getElementById("header5").style.color = '#FAA0A0';
    }

}

function check6()
{
    if(key[5] == answers[5].value) 
    {
        document.getElementById("header6").style.color = '#bfd9be';
        document.getElementById("q6b").style.color = "#bfd9be";
    }
    else
    {
        document.getElementById("header6").style.color = '#FAA0A0';
    }
}

function check7()
{
    if(key[6] == answers[6].value) 
    {
        document.getElementById("header7").style.color = '#bfd9be';
        document.getElementById("q7d").style.color = "#bfd9be";
    }
    else
    {
        document.getElementById("header7").style.color = '#FAA0A0';
    }

}

function check8()
{
    if(key[7] == answers[7].value) 
    {
        document.getElementById("header8").style.color = '#bfd9be';
        document.getElementById("q8b").style.color = "#bfd9be";
    }
    else
    {
        document.getElementById("header8").style.color = '#FAA0A0';
    }
}

function check9()
{
    if(key[8] == answers[8].value) 
    {
        document.getElementById("header9").style.color = '#bfd9be';
        document.getElementById("q9c").style.color = "#bfd9be";
    }
    else
    {
        document.getElementById("header9").style.color = '#FAA0A0';
    }

}

function check10()
{
    if(key[9] == answers[9].value)
    {
        document.getElementById("header10").style.color = '#bfd9be';
        document.getElementById("q10b").style.color = "#bfd9be";
    }
    else
    {
        document.getElementById("header10").style.color = '#FAA0A0';
    }
}