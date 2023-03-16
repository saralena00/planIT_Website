
//Student login open and close toggle
$('.student-login').click( function animateStudentLogin(e) {
    if (e.target.className == 'input' || e.target.className == 'registration') {
        return false
    }
    else {
        if($(this).hasClass('wide')) {
            $(this).animate({'width': '20rem'})
            $('.teacher-login').animate({'width':'20rem'})
            $('.teacher-login-text').show()
            $('.login-form-section-student').animate({'opacity':'0%'})
            $('.login-form-section-student').css({'display':'none'})
            
            $(this).removeClass('wide')
        }
        else {
            $(this).animate({'width': '86%'})
            $('.teacher-login').animate({'width':'0'})
            $('.teacher-login-text').hide()
            $('.login-form-section-student').css({'display': 'flex'}).animate({'opacity':'100%'})
            
            $(this).addClass('wide')
        } 
    }
})


//Teacher login open and close toggle
$('.teacher-login').click( function animateTeacherLogin(e) {
    if(e.target.className == 'input') {
        return false
    }
    else {
        if($(this).hasClass('wide')) {
            $(this).animate({'width': '20rem'})
            $('.student-login').animate({'width':'20rem'})
            $('.student-login-text').animate({
                opacity: 100,
            }, 200)
            $('.login-form-section-teacher').animate({'opacity':'0%'})
            $('.login-form-section-teacher').css({'display':'none'})
            
            $(this).removeClass('wide')
        }
        else {
            $(this).animate({'width': '86%'})
            $('.student-login').animate({'width':'0'})
            $('.student-login-text').animate({
                opacity: 0
            }, 200)
            $('.login-form-section-teacher').css({'display': 'flex'}).animate({'opacity':'100%'})

            
            $(this).addClass('wide')
        }
        console.log(e)
    }
})