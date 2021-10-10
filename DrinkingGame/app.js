//appControler
var datas = (function() {
    var newArray = [];
    var ruleObjs = [];
    var playerObjs = [];
    var questionsArray = [
        "What is your Birthday",
        "Whats the first thing you'll buy with your dream jobs pay check",
        "Dream Car",
        "Who is your current Crush",
        "What is your biggest Fear",
        "What embarrasses you the most and/or what’s been your most embarrassing moment",
        "What qualities do you look for in people",
        "Year you lost your virginity",
        "Does anyone know your biggest secret",
        "Last time you slept with someone",
        "Any Tattoes? If so what would you get",
        "Have you ever walked in on your parents doing it",
        "What is your guilty pleasure",
        "What kink would make you run away",
        "What would be in your web history that you’d be embarrassed if someone saw",
        "Have you ever tried to take a sexy picture of yourself",
        "How would you rate your looks on a scale of 1 to 10",
        "Do you think you'll marry your current girlfriend/boyfriend. Drink = Single",
        "Would you rather lose your sex organs forever or gain 200 pounds",
        "Who in this room would be the worst person to date? Why",
        "If you were reborn, what decade would you want to be born in",
        "If you could go back in time in erase one thing you said or did, what would it be",
        "Have you ever been caught checking someone out",
        "What's the most unflattering school picture of you. Show us or take a shot",
        "Would you rather be caught picking your nose or picking a wedgie",
        "Do you pee in the shower",
        "The world ends next week and you can do anything you want (even if it's illegal). What would you do",
        "How far would you go to land the guy or girl of your dreams",
        "Who is one person you pretend to like, but actually don’t",
        "What children’s movie could you watch over and over again",
        "When was the last time you wet the bed",
        "If you had to make out with any Disney character, who would it be",
        "What did you last search on a porn site",
        "If you were home by yourself all day, what would you do",
        "What is something you’ve done to try to be ‘cooler’",
        "Have you ever got caught doing something you shouldn’t, what was it",
        "What was the last rate-R movie you watched",
        "What is something that no one else knows about you",
        "What is the worst date you’ve ever been on",
        "Have you ever had a crush on a friend’s boyfriend/girlfriend",
        "If you had to make out with a boy, who would it be",
        "Worst/Best way you have ever asked someone out",
        "Have you ever had a crush on a person at least 10 years older than you",
        "Who is the worst kisser you’ve kissed",
        "Do you ever admire yourself in the mirror",
        "Do you secretly love Twilight",
        "Who is the hottest? Hagrid, Dumbledore, or Dobby",
        "Who are the top 5 cutest girls you know? Rank them",
        "If you were stranded on a deserted island, who would you want to be stranded with",
        "What's the sexiest thing about a girl",
        "Who would you hate to see naked",
        "If you could only use one swear word for the rest of your life, which one would you choose",
        "What's the best thing to say to your friend that would be the worst thing to say to your crush",
        "Who's the hottest in the room",
        "Have you ever shared your friend's secret with someone else",
        "Rate everyone in the room from 1 to 10, with 10 being the hottest",
        "Rate everyone in the room from 1 to 10, with 10 being the best personality",
        "If your friend asked you to lie for them and you knew you would get in trouble, would you do it",
        "If you had to choose, who would you stop being friends with",
        "What is the most annoying thing about your best friend",
        "Have you ever tried drugs",
        "Have you ever sexted anyone",
        "Would you ever consider posing for Playboy or a magazine like it",
        "Have you ever seen a naughty magazine",
        "How much money would we have to pay you for you to agree to flash them something?",
        "Have you ever been arrested",
        "Who was your first kiss and how was it",
        "What’s the craziest thing you would do /ever done sexually",
        "Biggest turn off",
        "Biggest turn on",
        "What is your crush's personality like?",
        "Have you ever tried to take a sexy picture of yourself?",
        "Do you sleep with a stuffed animal?",
        "Do you drool in your sleep?",
        "Do you talk in your sleep?",
        "How would you rate your looks on a scale of 1 to 10?",
        "What don't you like about me?",
        "What colour underwear are you wearing right now?",
        "What was the last thing you texted?",
        "What's your biggest pet peeve?",
        "How many people have you kissed?",
        "What's your biggest turn-on",
        "What’s the raunchiest porn you’ve ever watched?",
        "What’s the most degrading thing you’ve ever done during sex?",
        "Who’s the most inappropriate person you’ve ever fantasied about?",
        "What’s the most embarrassing thing you’ve ever done while drunk?",
        "How many people in this room would you willingly bang?",
        "What’s the most embarrassing item you’ve ever used to get yourself off?",
        "What was the last thing you masturbated to?",
        "Tell the story of your worst sexual encounter",
        "What’s the biggest secret that you’re keeping from everyone in this room?",
        "What’s the most scandalous location you’ve had sex in?",
        "What – if any – amount of money would you be willing to have sex with a stranger for?",
        "What was the last thing you cried over?",
        "What’s the least amount of time you’ve known someone for before sleeping with them?"  
    ];
    var dares = [
        "Slap yourself in the face hard",
        "Chug",
        "Spin around 5 times",
        "Do 5 Pushups",
        "Give Someone A Drink",
        "Down Half your drink",
        "Give away a drink",
        "For A Round Your Drinks Are Doubled!"
    ];
    var htmlStrings = {
     questionLabel: ".change",
     newCard: ".newCardBtn",
     cardLabel: ".change",
     ruleInput: ".ruleInput",
     ruleBtn: ".ruleInputBtn",
     ruleContainer: ".ruleList",
     removeBtn: ".remove__btn",
     addPlayer: ".addPlayerBtn",
     startGame: ".startGameBtn",
     playerName: ".playerName",
     playerList: ".playerList",
     playerForm: ".playerForm",
     main: ".main"
    };
    var found = false;  
    var counter = true;
    
    var Rule = function(id, description) {
        this.id = id;
        this.des = description;
    };
    var Player = function(id, name) {
        this.id = id;
        this.name = name;
        this.turn = false;
        
    }
    
    //--------------------functions for game
    return {
        getHtmlStrings: function(){
            return htmlStrings;
      },
        getArray: function(){
            return questionsArray;
        },
        randomNum: function(){
        randoNum = Math.floor(Math.random() * (questionsArray.length - 1));
        return randoNum;
        },   
        repeated: function(){
            
            var ranNo = datas.randomNum();
            
            if(!newArray.includes(ranNo)){
                newArray.push(ranNo);
                found = false;
            } else if (newArray.includes(ranNo)) {
                found = true;
                ranNo = datas.randomNum();
                return this.repeated();
            }
            
            return ranNo;
            
        },
        getDare: function(){
            var ranNo = Math.floor(Math.random() * (dares.length - 1));
            
            return dares[ranNo];
        },
        makeRuleObj: function(ruleDes){
            var newItem;      
            //ID last id + 1;       
            if (ruleObjs.length > 0) {
              id = ruleObjs[ruleObjs.length -1].id + 1;
            } else {
              id = 0;
            }
            //create new instance of rule constructor
            newItem = new Rule(id, ruleDes);
            
            //push object into data array
            ruleObjs.push(newItem);

            //return the object for easy access
            
            return newItem;
        },
        makePlayerObj: function(playerName){
            var newItem;      
            //ID last id + 1;       
            if (playerObjs.length > 0) {
              id = playerObjs[playerObjs.length -1].id + 1;
            } else {
              id = 0;
            }
             
            //create new instance of rule constructor
            newItem = new Player(id, playerName);
            
            //push object into data array
            playerObjs.push(newItem);
             
             console.log(playerObjs);

//            //return the object for easy access
//            
            return newItem;
        },
        deleteItem: function(id) {
            var ids, index;
            ids = ruleObjs.map(function(current) {
              return current.id;
            });
            index = ids.indexOf(id);
            //map unlike foreach returns a new array

            if (index !== -1) {
              //splice is used to remove elements
              ruleObjs.splice(index, 1);
                console.log(ruleObjs);
            }
      },
        getRules: function() {
            return ruleObjs;
        },
        getCounter: function() {
            return counter;
        },
        setCounter: function(bool){
            counter = bool;
        },
        getPlayerArray: function(){
            return playerObjs;
        },
        getPlayerObj: function(index){
            return playerObjs[index];
        }
        
        }
    
})();

//Global App Controller 
var global = (function(dataArgs) {  
    
    var questionsArr = dataArgs.getArray();
    
    var DOM = dataArgs.getHtmlStrings();
    
    var lastPlayer = 0;
    
    function setUpEventListeners(){  
        document.querySelector(".newCard").addEventListener("click", nextCard);
        document.querySelector(DOM.addPlayer).addEventListener('click', addPlayer);
        document.querySelector(DOM.startGame).addEventListener('click', startGame);
        document.querySelector(DOM.ruleContainer).addEventListener('click', deleteRule);
        document.addEventListener('keypress', function(event) {
        if(event.keycode === 13 | event.which === 13) {
        nextCard();
        }});
        
        
         document.querySelector(DOM.playerName).addEventListener("keydown", function(event) {
          if (event.keyCode === 13) {
           event.preventDefault();
              addPlayer();
          }
        });
    }
    
    
    function startGame(e){
        
        e.preventDefault();
        
        var result = nextPlayer();
        
        document.querySelector(DOM.playerForm).style.display = "none";
         document.querySelector(".ruleList").classList.remove('invis');
        document.querySelector(".newCard").classList.remove('invis');
        addActiveClass(result.id);
        
        
        
    }
    
    function addPlayer(){
        
        var input, newItem;
        input = document.querySelector(DOM.playerName).value;
        
        if(input !== "") {
            newItem = datas.makePlayerObj(input);
        }
        
        //show player on UI
        var html, newHtml, element;
        
        //go into first container that contains all rule children
        element = DOM.playerList;
        
        html = "<div id ='player-%id%' class='item playerBack'><p>%name%</p></div>";
        
        // Replace the placeholder text with some actual data
        
        console.log(newItem.id)
        console.log(newItem.name)
        newHtml = html.replace('%id%', newItem.id);
        newHtml = newHtml.replace('%name%', newItem.name);
        
        document.querySelector(DOM.playerList).insertAdjacentHTML('beforeend', newHtml);
        document.querySelector(DOM.playerName).value = "";
    }
    
    function addActiveClass(id, prevId){
        document.getElementById("player-" +id).classList.remove('playerBack');
        document.getElementById("player-"+id).classList.add('active');
        document.getElementById("player-"+prevId).classList.add('playerBack');

    }
    
    //function for next player
    function nextPlayer(){
        
         
         var result = datas.getPlayerObj(lastPlayer);
        
            lastPlayer += 1;
        
        return result;
        
    }
    
    function nextCard(){
        
        var result, prevRes;
        
        if(datas.getCounter()){   
            var ranNum = dataArgs.randomNum();
            if (ranNum <= 7){
                var dareResult = dataArgs.getDare();
                changeHTML("Dare: " + dareResult);

            } else if (ranNum >= 8 && ranNum <= 10){
                //function MakeARule
                addRule();
                
                changeHTML("Make A Rule For The Peasants To Follow");
                document.querySelector(".ruleForm").classList.remove("invis"); document.querySelector(".nextCardBtnDiv").classList.add("invis");
                document.querySelector(".change").style.margin = "5rem 0 2rem 0";
            } else {
                var result = dataArgs.repeated();
                changeHTML(questionsArr[result]);
            }
            
            var playerArr = datas.getPlayerArray()

            if(lastPlayer < playerArr.length){
                result = nextPlayer()
            } else if (lastPlayer => playerArr.length) {
                lastPlayer = 0;
                result = nextPlayer();
            }

            if (result.id >  0) {
                prevRes = playerArr[(result.id) - 1].id;
            } else if (result.id == 0){
                prevRes = playerArr.length - 1;
            }


             console.log(prevRes);
             removeActiveClass(prevRes);
             addActiveClass(result.id, prevRes);

            //show question page   
        } 
        
        
        
    };
    
    function removeActiveClass(id){
    
    document.getElementById("player-" + id).classList.remove("active");
        
    }
    
    var addRule = function(){
        datas.setCounter(false);
        
        console.log(datas.getCounter());
        var htmlInp =  document.querySelector(DOM.ruleInput)
        //make next card button unclickable
        
        var inpBtn = document.querySelector(DOM.ruleBtn);
        //1. input editable
        document.querySelector(DOM.ruleInput).readOnly = false;
        document.querySelector(DOM.ruleBtn).readOnly = true;

        //2. function runs when event occurs.
        document.querySelector(DOM.ruleBtn).addEventListener("click", makeRule);
        
        htmlInp.addEventListener("keydown", function(event) {
          if (event.keyCode === 13) {
           event.preventDefault();
              makeRule();
          }
        });
        
        
        
    };
    
    var makeRule = function(){
        var input, newItem;
        input = document.querySelector(DOM.ruleInput);
        
        if(input.value !== "") {
          
            newItem = dataArgs.makeRuleObj(input.value);
          
            showRule(newItem);
          
            input.value = "";
            input.blur();
           
           document.querySelector(DOM.ruleInput).readOnly = true;
            
            datas.setCounter(true);
            
            //set form invis again.
            document.querySelector(".ruleForm").classList.add("invis");
            
             document.querySelector(".change").style.marginTop = "-5rem"; document.querySelector(".nextCardBtnDiv").classList.remove("invis");
            
            
        } 
    }
    
    function changeHTML(quest){
        document.querySelector(DOM.cardLabel).innerHTML = quest;
    }
    
    function showRule(obj){
        
        var html, newHtml, element;
        
        //go into first container that contains all rule children
        element = DOM.ruleContainer;
        
        html = "<div id ='%id%'><p class='ruleDes'>%description%</p><button class='remove__btn'><i class='far fa-times-circle'></i></button></div>";
        
        // Replace the placeholder text with some actual data
        newHtml = html.replace('%id%', obj.id);
        newHtml = newHtml.replace('%description%', obj.des);
        
        document.querySelector(element).insertAdjacentHTML('beforeend', newHtml);
    }
    
    function deleteRule(event){
        //some code
        
        var itemID;

        itemID = event.target.parentNode.parentNode.id;
        
        if (itemID) {

          //1 Delete the item from datastructure
          datas.deleteItem(itemID);
            
          //2. Delete the item from the UI
          deleteListItem(itemID);
            
            console.log(datas.getRules());
        }
        
    } 
    
    function deleteListItem(selectorID) {
    var el = document.getElementById(selectorID)

        el.parentNode.removeChild(el);
    }
    
    return {
        init: function(){
            console.log("app has started");
            setUpEventListeners();
            //ruleInput is readonly = true;
//            document.querySelector(DOM.ruleInput).readOnly = true;
        }
    }


})(datas);

global.init();

