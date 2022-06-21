$(document).ready(function(){
    $('.dropdown-toggle').dropdown();

    var clicked = false;
    $(document).click(function(e) {
      if (!$(e.target).is('.dropdown-toggle') ) 
      {
        if ($('.dropdown-toggle').hasClass("show") && $('.dropdown-menu').hasClass('show')) 
        {
            $('.dropdown-toggle').removeClass('show');
            $('.dropdown-menu').removeClass('show');
            clicked = false;
        }
        if (clicked == true) 
        {
            if ($('.dropdown-menu').hasClass('show')) 
            {
                $('.dropdown-toggle').removeClass('show');
                $('.dropdown-menu').removeClass('show');
                clicked = false;
            }
        }
      }
      else {
        if ($(e.target).is('#dropBaixada'))
        {
            $('#dropSP').removeClass('show');
            $('#dropSPMenu').removeClass('show');

            $('#drop-a-uniero').removeClass('show');
            $('#drop-a-unieroMenu').removeClass('show');

            $('#drop-exames').removeClass('show');
            $('#drop-examesMenu').removeClass('show');
            clicked = true;
        }
        if ($(e.target).is('#dropSP'))
        {
            $('#dropBaixada').removeClass('show');
            $('#dropBaixadaMenu').removeClass('show');

            $('#drop-a-uniero').removeClass('show');
            $('#drop-a-unieroMenu').removeClass('show');

            $('#drop-exames').removeClass('show');
            $('#drop-examesMenu').removeClass('show');
            clicked = true;
        }
        if ($(e.target).is('#drop-a-uniero'))
        {
            $('#dropBaixada').removeClass('show');
            $('#dropBaixadaMenu').removeClass('show');

            $('#dropSP').removeClass('show');
            $('#dropSPMenu').removeClass('show');

            $('#drop-exames').removeClass('show');
            $('#drop-examesMenu').removeClass('show');
            clicked = true;
        }
        if ($(e.target).is('#drop-exames'))
        {
            $('#dropBaixada').removeClass('show');
            $('#dropBaixadaMenu').removeClass('show');

            $('#drop-a-uniero').removeClass('show');
            $('#drop-a-unieroMenu').removeClass('show');

            $('#dropSP').removeClass('show');
            $('#dropSPMenu').removeClass('show');
            clicked = true;
        }
      }
    });

    $('.dropdown').hover(function() {
        if (clicked == false) 
        {
            var hoverDrop = $(this).find('.dropdown-menu');
            hoverDrop.addClass('show');
        }
    }, function() {
        if (clicked == false) 
        {
            var hoverDrop = $(this).find('.dropdown-menu');
            hoverDrop.removeClass('show');
        }
    });

    $('.banner-home').owlCarousel({
        loop:true,
        items: 1,
        autoplay: true,
        paginationSpeed: 300,
        nav: true,
        dots: false,
        navText: ['<img class="left-arrow" aria-hidden="true">','<img class="right-arrow" aria-hidden="true">']
    })

    $('#extra-bucais').click(function(){
        $('.intra-bucais').removeClass('d-flex');
        $('.intra-bucais').addClass('d-none');

        $('.extra-bucais').removeClass('d-none');
        $('.extra-bucais').addClass('d-flex');

        $('#extra-bucais').addClass('active');
        $('#intra-bucais').removeClass('active');
    });

    $('#intra-bucais').click(function(){
        $('.extra-bucais').removeClass('d-flex');
        $('.extra-bucais').addClass('d-none');

        $('.intra-bucais').removeClass('d-none');
        $('.intra-bucais').addClass('d-flex');

        $('#intra-bucais').addClass('active');
        $('#extra-bucais').removeClass('active');
    });

    $('.dentista-carousel').owlCarousel({
        loop: true,
        dots: true,
        autoplay: 8000,
        paginationSpeed: 300,
        center: true,
        autoWidth:true,
        navText: ['<img class="left-arrow" aria-hidden="true">','<img class="right-arrow" aria-hidden="true">'],
        responsive: { 
            0:{
                items: 1,
                nav: false
            },
            769: {
                nav: true
            },
            1025: {
                nav: true,
                items: 3
            }
        }
    })

    $('.logos-carousel').owlCarousel({
        loop: true,
        autoplay: 8000,
        paginationSpeed: 300,
        nav: false,
        dots: false,
        responsive: { 
            0:{
                items: 1
            },
            390: {
                items: 2
            }
        }
    })

    $('.unidades-carousel').owlCarousel({
        loop: true,
        autoplay: 8000,
        paginationSpeed: 300,
        nav: false,
        dots: false,
        center: true,
        autoWidth:true,
        responsive: { 
            0:{
                items: 1
            },
            1024: {
                items: 5
            }
        }
    })

    var owl = $('.unidades-carousel');
    owl.on('change.owl.carousel', function(event) {
        function alteraAtivo() {
        var dados = $(".unidades-carousel > .owl-stage-outer > .owl-stage > .center > div ").data('index');
            $('.ativo').removeClass('ativo');
            $('.center').addClass('ativo');
            console.log(dados);
            
            //Unidade Guarujá
            if (dados == 1) 
            {
                $('#unidades-info-title').html('Guarujá');
                $('#enderecoUnidade').html('Av. Dr. Adhemar de Barros, 230 - Sala 14<br>Jardim Santo Antônio, Guarujá - SP<br>CEP - 11430-003')
                $('#telefoneUnidade').html('(13) 3371-7677<span class="divisor-telefone"> | </span>(13) 3383-4777')
                $('#horarioUnidade').html('Seg a Sex 8h45 às 17h45<br>Sab 9h00 às 12h00')
                $('#celularUnidade').html('(13) 99784-4777')
            }

            //Unidade Praia Grande
            if (dados == 2) 
            {
                $('#unidades-info-title').html('Praia Grande');
                $('#enderecoUnidade').html('Av. Brasil, 600 - Sala 819<br>Boqueirão, Praia Grande - SP<br> CEP - 11701-090')
                $('#telefoneUnidade').html('(13) 3371-4280<span class="divisor-telefone"> | </span>(13) 3474-5327')
                $('#horarioUnidade').html('Seg a Sex 8h30 às 18h00<br>Sab 8h30 às 13h00')
                $('#celularUnidade').html('(13) 97402-1440')
            }

            //Unidade Santos
            if (dados == 3) 
            {
                $('#unidades-info-title').html('Santos');
                $('#enderecoUnidade').html('Avenida Ana Costa, 482/484 - Sala 801<br>Gonzaga, Santos - SP<br>CEP 11060-002')
                $('#telefoneUnidade').html('(13) 3288-2232<span class="divisor-telefone"> | </span>(13) 3326-3756')
                $('#horarioUnidade').html('Seg a Sex 8h30 às 18h00<br>Sab 8h30 às 13h00')
                $('#celularUnidade').html('(13) 99208-2772')
            }

            if (dados == 4) 
            {
                $('#unidades-info-title').html('São Vicente');
                $('#enderecoUnidade').html('R. Berta Craveiro Lopes, 36<br>Jardim Independência, São Vicente - SP<br>CEP 11380-510')
                $('#telefoneUnidade').html('(13) 3324-3296<span class="divisor-telefone"> | </span>(13) 3561-2156')
                $('#horarioUnidade').html('Seg a Sex 8h30 às 18h00<br>Sab 8h30 às 13h00')
                $('#celularUnidade').html('(13) 97414-7573')
            }

            if (dados == 5) 
            {
                $('#unidades-info-title').html('Artur Alvim');
                $('#enderecoUnidade').html('R. Inês Monteiro, 235 - Casa 1<br>Parque Artur Alvim, São Paulo - SP<br>CEP 03568-030')
                $('#telefoneUnidade').html('(11) 2894-6740<span class="divisor-telefone"> | </span>(11) 2254-4972')
                $('#horarioUnidade').html('Seg a Sex 8h00 às 18h30<br>Sab 8h00 às 13h30')
                $('#celularUnidade').html('(11) 94529-7711')
            }

            if (dados == 6) 
            {
                $('#unidades-info-title').html('Mooca');
                $('#enderecoUnidade').html('R. do Oratório, 1931<br>Alto da Mooca, São Paulo - SP<br>CEP 03195-100')
                $('#telefoneUnidade').html('(11) 2076-8380<span class="divisor-telefone"> | </span>(11) 4329-8078')
                $('#horarioUnidade').html('Seg a Sex 8h00 às 18h30<br>Sab 8h00 às 13h30')
                $('#celularUnidade').html('(11) 94530-2124')
            }

            if (dados == 7) 
            {
                $('#unidades-info-title').html('Tatuapé');
                $('#enderecoUnidade').html('R. Vilela, 652 - Sala 906 <br>Tatuapé, São Paulo - SP<br>CEP 03314-000')
                $('#telefoneUnidade').html('(11) 2097-6739')
                $('#horarioUnidade').html('Seg a Sex 8h00 às 18h30<br>Sab 8h00 às 13h30')
                $('#celularUnidade').html('(11) 99274-1008')
            }

            if (dados == 8) 
            {
                $('#unidades-info-title').html('Vila Formosa');
                $('#enderecoUnidade').html('Praça Dr. Sampaio Vidal, 395<br>Vila Formosa, São Paulo - SP<br>CEP 03356-060')
                $('#telefoneUnidade').html('(11) 2781-2425<span class="divisor-telefone"> | </span>(11) 2389-7325')
                $('#horarioUnidade').html('Seg a Sex 8h00 às 18h30<br>Sab 8h00 às 13h30')
                $('#celularUnidade').html('(11) 94530-0923')
            }

            if (dados == 9) 
            {
                $('#unidades-info-title').html('Vila Mariana');
                $('#enderecoUnidade').html('Av. Sen. Casemiro da Rocha, 609 - Sala 48<br>Mirandópolis, Vila Mariana - SP<br>CEP 04047-001')
                $('#telefoneUnidade').html('(11) 5585-0383<span class="divisor-telefone"> | </span>(11) 2925-9983')
                $('#horarioUnidade').html('Seg a Sex 8h00 às 18h00<br>Sab 8h00 às 13h30')
                $('#celularUnidade').html('(11) 99927-0383')
            }
        }
        const myTimeout = setTimeout(alteraAtivo, 100); 
    });

    $('.noticias-carousel').owlCarousel({
        items: 1,
        nav: true,
        dots: false,
        navText: ['<img class="left-arrow" aria-hidden="true">','<img class="right-arrow" aria-hidden="true">']
    })

    var nav = $('#mobile');
    $(window).scroll(function () {
        if ($(this).scrollTop() >= 81) 
        {
            nav.slideDown('fast');
            if (!$('#mobile').hasClass('fixed-top'))
            {
                $('#mobile').addClass("fixed-top")
                
            }   
        } 
        else 
        {
            nav.slideDown('fast');
            $('#mobile').removeClass("fixed-top")
        }  
    }); 



    $(document).click(function(e) {
        if ($(e.target).is('#mobile')) 
        {
            $('#opcaoMobile').click(function(e) {
                if (!$('#opcaoMobile').hasClass('collapsed'))
                {
                    $('#navbarSupportedContentMobile2').collapse('hide');
                    $('#navbarSupportedContentMobile3').collapse('hide');
                    $('#navbarSupportedContentMobile4').collapse('hide');
                }
            });
            $('#opcaoMobile2').click(function(e) { 
                if (!$('#opcaoMobile2').hasClass('collapsed'))
                {
                    $('#navbarSupportedContentMobile').collapse('hide');
                    $('#navbarSupportedContentMobile3').collapse('hide');
                    $('#navbarSupportedContentMobile4').collapse('hide');
                }
            });
            $('#opcaoMobile3').click(function(e) {
                if (!$('#opcaoMobile3').hasClass('collapsed'))
                {
                    $('#navbarSupportedContentMobile2').collapse('hide');
                    $('#navbarSupportedContentMobile').collapse('hide');
                    $('#navbarSupportedContentMobile4').collapse('hide');
                }
            });
            $('#opcaoMobile4').click(function(e) { 
                if (!$('#opcaoMobile4').hasClass('collapsed'))
                {
                    $('#navbarSupportedContentMobile2').collapse('hide');
                    $('#navbarSupportedContentMobile3').collapse('hide');
                    $('#navbarSupportedContentMobile').collapse('hide');
                }     
            });
        }
        else 
        {
            if ($(e.target).is('.unidades-button') || $(e.target).is('.unidades-button > h1') || $(e.target).is('#scroll')) 
            {
                
            }
            else if (!$(e.target).is('.unidades-button') || !$(e.target).is('.unidades-button > h1'))
            {
                $('#navbarSupportedContentMobile').collapse('hide');
                $('#navbarSupportedContentMobile2').collapse('hide');
                $('#navbarSupportedContentMobile3').collapse('hide');
                $('#navbarSupportedContentMobile4').collapse('hide');
            }
        }
    });


    $('form#capacitacao-form').validate({
        rules:{
          nome_capacitacao:{required: true, minlength: 4, number: false},
          email_capacitacao:{required: true, email: true}
        },
        messages:{
          nome_capacitacao: {required: 'Preencha o campo nome', minlength: 'No mínimo 4 letras', number: 'Apenas letras'},
          email_capacitacao: {required: 'Informe o seu e-mail', email: 'Informe um e-mail válido'}
        },
        submitHandler: function(form) {
            $('#botao-capacitacao').attr('disabled','disabled');
            var dados = $('#capacitacao-form').serialize();
            console.log(dados);
            $.ajax ({
                type: "POST",
                url: "/uniero/site2022/wp-content/themes/uniero/php/contato-capacitacao.php",
                data: dados,
                success: function(data) 
                {
                    if (data == 1) 
                    {
                        $('#botao-capacitacao').prop('disabled', false);
                        $($('.conteudo-form-capacitacao').html()).remove();
                        $('.conteudo-form-capacitacao').html('<h2 class="d-flex justify-content-center align-items-center text-start flex-column msg-enviada my-4 px-2">Agradecemos pelo contato!<br><span class="mt-4 px-3 text-center" id="msg-enviada">Retornaremos o mais breve possível!</span></h2>');
                    }
                    else
                    {
                        
                        $($('.conteudo-form-capacitacao').html()).remove();
                        $('.conteudo-form-capacitacao').html("<h2>Houve um erro ao enviar o formulário!<br><span>Atualize a página e tente novamente!</span></h2>");
                    }
                }  
            });
        }
    });
});