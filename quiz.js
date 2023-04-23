const quizData = [
    {
        question: "which of the following describes you the most?",
        a: "Emphathetic",//design//
        b: "Skeptical",//data science//
        c: "Leader",//dba//
        d: "problem solver",//developer//
        DESIGN: "a",
        DBA:"c",
        DATASCIENCE:"b",
        DEVELOPER:"d",
    },
    {
        question: "In which way you usually think?",
        a: "Analytical",//data science//
        b: "Logical",//developer//
        c: "Creative",//design//
        d: "Concrete",//dba//
        DESIGN: "c",
        DBA:"d",
        DATASCIENCE:"a",
        DEVELOPER:"b",
    },
    {
        question: "Creating a new product as a team, would you...?",
        a: "make sure the team have everything they need to develop it ",//data science//
        b: "design the look of the product",//design//
        c: "build a working model of the product",//developer//
        d: "maintaining records for memebers as well as product",//dba//
        DESIGN: "b",
        DBA:"d",
        DATASCIENCE:"a",
        DEVELOPER:"c",
    },
    {
        question: "Are you an introvert or extrovert?",
        a: "Introvert",//data science//
        b: "Extrovert",//developer,dba//
        c: "Ambivert",//design//
        DESIGN: "c",
        DBA:"b",
        DATASCIENCE:"a",
        DEVELOPER:"b",
    },
    {
        question: "What are your strengths? ",
        a: "statistics and analysis",//data science//
        b: "designing",//design//
        c: "Problem solving",//developer//
        d: "trouble shooting",//dba//
        DESIGN: "b",
        DBA:"d",
        DATASCIENCE:"a",
        DEVELOPER:"c",
    },
    {
        question: "How do you make an important decision?",
        a: "after carefully every option and then predicted results",//data science//
        b: "come up with the simplest possibke solution",//developer//
        c: "gut instinct",//design//
        d: "i make a executve decision and everyone follows along",//dba//
        DESIGN: "c",
        DBA:"d",
        DATASCIENCE:"a",
        DEVELOPER:"b",
    },
    {
        question: "What does success mean for you?",
        a: "earning a high income",//data science//
        b: "ability to balance work and life",//developer//
        c: "creative control of my projects",//design//
        d: "autonomy to make high-level decision",//dba//
        DESIGN: "c",
        DBA:"d",
        DATASCIENCE:"a",
        DEVELOPER:"b",
    },
    {
        question: "When you picture your ideal job, what are you doing?",
        a: "Getting creative and coming up with new ideas",//design//
        b: "Thinking big-picture and solving problems",//data science//
        c:"Figuring out how a company operates,finding ways to do it better",//dba//
        d: "Working in a fast-paced role that pushes me to produce results",//developer//
        DESIGN: "a",
        DBA:"c",
        DATASCIENCE:"b",
        DEVELOPER:"d",
    },
    {
        question: "How do you feel about working in groups?",
        a: "I can adapt to any situation",//design//
        b: "I prefer to work by myself most of the time",//data science//
        c:"I like working with a group, as long as i can take the lead",//dba//
        d: "I love working in groups",//developer//
        DESIGN: "a",
        DBA:"c",
        DATASCIENCE:"b",
        DEVELOPER:"d",
    },
    {
        question: "Which of these is your soft skills?",
        a: "visual communication",//design//
        b: "Critical thinking",//data science//
        c: "Time management",//dba//
        d: "Problem solving",//developer//
        DESIGN: "a",
        DBA:"c",
        DATASCIENCE:"b",
        DEVELOPER:"d",
    },
    {
        question: "Which of the following technical skills interests you?",
        a: "Prototyping",//design//
        b: "Data modelling",//data science//
        c: "Maintain database",//dba//
        d: "Data structure and algorithms",//developer//
        DESIGN: "a",
        DBA:"c",
        DATASCIENCE:"b",
        DEVELOPER:"d",
    },
    {
        question: "which programming language you prefer?",
        a: "Javascript",//design//
        b: "Python",//data science//
        c: "SQL",//dba//
        d: "C/C++",//developer//
        DESIGN: "a",
        DBA:"c",
        DATASCIENCE:"b",
        DEVELOPER:"d",
    },
    {
        question: "What level of challenge do you like?",
        a: "I'm at my best when im thinking creatively",//design//
        b: "i perform best when under pressure",//data science//
        c: "I work on something untill its perfect",//dba//
        d: "If i cant solve it quickly, I get bored and move on",//developer//
        DESIGN: "a",
        DBA:"c",
        DATASCIENCE:"b",
        DEVELOPER:"d",
    },
    {
        question: "How do you like to pass time?",
        a: "Art/ Crafting",//design//
        b: "Reading",//data science//
        c: "Hanging out with friends",//dba//
        d: "Playing video games",//developer//
        DESIGN: "a",
        DBA:"c",
        DATASCIENCE:"b",
        DEVELOPER:"d",
    },
    {
        question: "Which domain would you like work in?",
        a: "Web designing",//design//
        b: "Data science",//data science//
        c: "Database Administrator",//dba//
        d: "Developer",//developer//
        DESIGN: "a",
        DBA:"c",
        DATASCIENCE:"b",
        DEVELOPER:"d",
    },
];
const quiz= document.getElementById('quiz')
const answerEls = document.querySelectorAll('.answer')
const questionEl = document.getElementById('question')
const a_text = document.getElementById('a_text')
const b_text = document.getElementById('b_text')
const c_text = document.getElementById('c_text')
const d_text = document.getElementById('d_text')
const submitBtn = document.getElementById('submit')
let currentQuiz = 0
let score = 0
let scoreDesign=0
let scoreDba=0
let scoreDataScience=0
let scoreDeveloper=0
loadQuiz()
function loadQuiz() {
    deselectAnswers()
    const currentQuizData = quizData[currentQuiz]
    questionEl.innerText = currentQuizData.question
    a_text.innerText = currentQuizData.a
    b_text.innerText = currentQuizData.b
    c_text.innerText = currentQuizData.c
    d_text.innerText = currentQuizData.d
}
function deselectAnswers() {
    answerEls.forEach(answerEl => answerEl.checked = false)
}
function getSelected() {
    let answer
    answerEls.forEach(answerEl => {
        if(answerEl.checked) {
            answer = answerEl.id
        }
    })
    return answer
}
submitBtn.addEventListener('click', () => {
    const answer = getSelected()
    if(answer) {
        if(answer === quizData[currentQuiz].DESIGN) {
            score++
            scoreDesign++
        }
       if(answer === quizData[currentQuiz].DBA) {
           score++
           scoreDba++
       }
       if(answer === quizData[currentQuiz].DATASCIENCE) {
        score++
        scoreDataScience++
    }
    if(answer === quizData[currentQuiz].DEVELOPER) {
        score++
        scoreDeveloper++
    }
       currentQuiz++
       if(currentQuiz < quizData.length) {
           loadQuiz()
       } else {
           quiz.innerHTML = `
           <h2>Your Result:
           The following scores are your compatibility in the domains</h2>
           <h2>Web design: ${scoreDesign}0%</h2>
           <h2>DBA: ${scoreDba}0%</h2>
           <h2>DATASCIENCE: ${scoreDataScience}0%</h2>
           <h2>DEVELOPER: ${scoreDeveloper}0%</h2>
            <button onclick="window.location.href='http://127.0.0.1:5500/PBL%20MINI%20PROJECT/index.html';">
      Back
    </button>
           `
       }
    }
})