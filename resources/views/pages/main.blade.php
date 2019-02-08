@extends('layouts.master')

@section('content')

<section id="para">
  <div class="parallax-container">
  <div class="parallax"><img src="assets/img/shutterstock_6005927.jpg"></div>
  </div>
  <div class="container">
    <div class="row">
      <div class="para_txt">
    <h1 class="para_h1"><span class="para_span">RuConsulting</span> - компания, целью которой является содействие запуску, развитию и росту российских технологий и идей.</h1>
    <p class="para_p">Мы профессионально занимается доработкой идей и упаковкой проектов с целью их участия в системе государственной поддержки и последующего выхода на инвесторов</p>
  <!-- Modal Trigger -->
  <a class="waves-effect waves-light btn modal-trigger btn_consult" href="#modal1">Получить консультацию</a>

  <!-- Modal Structure -->
  <div id="modal1" class="modal">
    <div class="modal-content center">
      <p>Заполни форму и получи консультацию !</p>
      <form action="/footerform" method="POST">
      {{ csrf_field() }}
          <input placeholder="Введите Ваше имя" type="text" name="name_f" >
          <input placeholder="Введите Ваш телефон" type="text" id="phone1" name="phone">
          <input placeholder="Введите Вашу почту" type="email" name="email">
      <div class="col s12 center"><button type="submit" class="waves-effect waves-light btn modal-trigger btn_consult">получить</button></div>
    </div>
    </form>
  </div>
  </div>
    </div>
  </div>
</section>
<section>
  <div class="two"></div>
  <div class="container">
    <div class="row">
      <section class="section-text" id="about">
          <div class="col-md-6">
            <p><b>Развитие предпринимательства</b> - реализация программ вовлечения и обучения начинающих  предпринимателей и инноваторов.</p>
            <p><b>Акселерационные программы</b> - программы ускоренной проверки гипотез, разработки MVP и упаковки проектов</p>
            <p><b>Упаковка проектов</b> - упаковка проекта и презентации для инвесторов</p>
          </div>
          <div class="col-md-6">
            <p><b>Международные программы </b>- реализация международных образовательных программ</p>
            <p><b>Заявки на гранты</b> - предложение для инновационных компаний, заинтересованных в получении финансовой поддержки, которую на конкурсной основе оказывают Фонды в рамках грантовых программ.</p>
          </div>
    </section>
    </div>
  </div>
</section>
<section id="para_two">
  <div class="parallax-container para_two">
      <div class="parallax"><img src="assets/img/1_24_file_175_438.jpg"></div>
      <div class="container">
        <div class="bonus">
        <p class="p_last_1">Каждый проект должен получить возможности для развития. На сегодняшний день сущестует множество развличных форм поддержки проектов и идей.</p>
        <p class="p_last_1">Мы помогаем технологическим проектам развиваться максимально эффективно, используя все современные инструменты поддержки, а также одну из лучших в стране экспертиз и подходов к упаковке проектов</p>
      </div>
      </div>
    </div>
</section>
<section class="section-text" id="zav">
      <div class="container">
        <h3 class="text-xs-center">Заявки на гранты</h3>
        <div class="row p-y-3">
          <div class="col-md-12">
            <p class="zayavka">Предложение для стартапов и проектных команд, заинтересованных в участии в постоянных государственных программах поддержки.

Имея многолетний успешный опыт работы в области разработки конкурсной документации и ведении отчетности, наши специалисты содействуют развитию бизнеса и приглашают к сотрудничеству команды, заинтересованные в участии в программах на получение государственного финансирования</p>
          </div>
        </div>
      </div>
    </section>
<section class="section-pricing bg-faded text-xs-center">
      <div class="container">
        <h3>Стоимость</h3>
        <div class="row p-y-3">
          <div class="col-md-4 p-t-md">
            <div class="card pricing-box">
              <div class="card-header text-uppercase">
                Пакет «Аудит»
              </div>
              <div class="card-block">
                <p class="card-title">Предварительный аудит уже написанной заявки и обратная связь по ней – бесплатно!</p>
                <h4 class="card-text">
                  <sup class="pricing-box-currency"></sup>
                  <span class="pricing-box-price">1</span>
                  <small class="text-muted text-uppercase"></small>
                </h4>
              </div>
            </div>
          </div>
          <div class="col-md-4 stacking-top">
            <div class="card pricing-box pricing-best p-x-0">
              <div class="card-header text-uppercase">
                Пакет «Стандарт»
              </div>
              <div class="card-block">
                <p class="card-title">Комплексный аудит проекта или идеи и написание заявки с нуля – 80 000 рублей фикс. В случае невыигрыша заявка на второй год будет нами доработана бесплатно с учетом замечаний</p>
                <h4 class="card-text">
                  <sup class="pricing-box-currency"></sup>
                  <span class="pricing-box-price">2</span>
                  <small class="text-muted text-uppercase"></small>
                </h4>
              </div>
            </div>
          </div>
          <div class="col-md-4 p-t-md">
            <div class="card pricing-box">
              <div class="card-header text-uppercase">
                Пакет «Гарантия»
              </div>
              <div class="card-block">
                <p class="card-title">Комплексный аудит драфта заявки и доработка заявки под необходимые требования. 30% от запрашиваемой суммы, только в случае выигрыша</p>
                <h4 class="card-text">
                  <sup class="pricing-box-currency"></sup>
                  <span class="pricing-box-price">3</span>
                  <small class="text-muted text-uppercase"></small>
                </h4>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="para_three">
  <div class="parallax-container para_three">
      <div class="parallax"><img src="assets/img/1_24_file_175_438.jpg"></div>
      <div class="container">
        <div class="bonus">
        <p class="p_last_1">Бесплатный аудит проекта или заявки на получение финансирования с обратной связью от квалифицированных экспертов!</p>
      </div>
      </div>
    </div>
</section>
    <section class="section-news"  id="up">
      <div class="container">
        <h3 class="sr-only_1">Упаковка проектов</h3>
        <div class="bg-inverse">
          <div class="row">
            <div class="col-md-6 p-r-0">
              <figure class="">
                <img src="assets/img/Invest-online-training.jpg" alt="Article thumbnail" class="img-fluid">
              </figure>
            </div>
            <div class="col-md-6 p-l-0">
              <article class="center-block">
                <h5 class="mews_5">Бизнес-планы</h5>
              </article>
            </div>
            <div class="col-md-12">
            <p class="news_p">
              Мы предлагаем стартапам услугу по разработке бизнес-плана, в основе которой - принцип разумной достаточности, базирующийся на четырех составляющих: высоком качестве, ёмком изложении, структурировании идеи, достаточном объеме.

              В рамках данной услуги мы предлагаем клиентам максимально удобный формат сотрудничества: проведение серии интервью (от 3 до 5) с основателем проекта. В результате заказчик получает комплексный бизнес-план, включающий финансовую модель и детализированную стратегию маркетинга, а также краткую презентацию проекта.

              В случае заинтересованности просим Вас связаться с нами. Будем рады подробно ответить на Ваши вопросы.
            </p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 col-md-push-6 p-l-0">
              <figure class="">
                <img src="assets/img/bf02677e_9fcc_42c3_89cf_758b00ea1d0a.jpeg" alt="Article thumbnail" class="img-fluid">
              </figure>
            </div>
            <div class="col-md-6 col-md-pull-6 p-r-0">
              <article class="center-block">
                <h5 class="mews_5">Исследования рынка</h5>
              </article>
            </div>
            <div class="col-md-12">
            <p class="news_p">
             Комплексные инновационные проекты, нишевые продукты и специфические рынки? Наша компания выполнит исследование рынка любой сложности.

Наши специалисты проводят тематические исследования любой сложности как маркетинговые (кабинетные или первичные), так и социологические (дизайн опроса, опрос, сбор данных и отчет по ним). Имея большой опыт, эксперты компании помогут заказчику выбрать именно тот тип исследования, результаты которого будут

максимально актуальны и полезны для достижения конкретных целей и реализации бизнес-стратегии предприятия, составят основу для выбора концептуального подхода к построению проекта, а также будут содержать рекомендации по развитию конкретного направления бизнеса или компании в целом.
            </p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 p-r-0">
              <figure class="">
                <img src="assets/img/34471360233_0841320715_o-768x505.jpg" alt="Article thumbnail" class="img-fluid">
              </figure>
            </div>
            <div class="col-md-6 p-l-0">
              <article class="center-block">
                <h5 class="mews_5">Финансовое моделирование</h5>
              </article>
            </div>
            <div class="col-md-12">
            <p class="news_p">
              Финансовая модель – важнейший документ, являющийся основой для выстраивания тактики и стратегии развития проекта. Грамотно разработанная финансовая модель будет преимуществом команды при ведении переговоров с потенциальными инвесторами и кредиторами, заинтересованными в получении детальной оценки потенциальных рисков проекта и прогнозировании движения денежных средств. Эксперты нашей компании в кратчайшие сроки подготовят для Вас документ, соответствующий требованиям ведущих мировых и российских финансовых организаций.

В случае заинтересованности просим Вас связаться с нами. Эксперты в области финансового моделирования подробно ответят на Ваши вопросы и расскажут о преимуществах нашей работы.
            </p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 col-md-push-6 p-l-0">
              <figure class="">
                <img src="assets/img/190234.jpg" alt="Article thumbnail" class="img-fluid">
              </figure>
            </div>
            <div class="col-md-6 col-md-pull-6 p-r-0">
              <article class="center-block">
                <h5 class="mews_5">Центр прототипирования</h5>
              </article>
            </div>
            <div class="col-md-12">
            <p class="news_p">
             Центр прототипирования организован в партнерстве и на базе производственных мощностей университетов – партнеров

Наши специалисты осуществляют управление проектом по разработке прототипа с точки зрения минимизации затрат за счет оптимизации производственных процессов и гибкого подхода к проектному менеджменту.

Мы также предоставляем клиентам услуги по разработке производственного дизайна. Каталог реализованных проектов и более подробную информацию о производственных мощностях можно получить</p>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection
