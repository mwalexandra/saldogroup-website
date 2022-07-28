<?

	$lang = @$_COOKIE['lang'];
			if (!$lang) {
					$lang = 'ru';
			}
			else {
				$lang = 'en';
			}

	$titleRU = 'Сальдогрупп - развитие вашего бизнеса';
	$titleEN = 'Saldogroup - development of your business';

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">

  <!-- Заголовок в зависимости от языка -->
  <title><?= $lang == 'ru' ? $titleRU : $titleEN; ?></title>

  <meta name="title-ru" content="<?= $titleRU; ?>" id="title-ru">
  <meta name="title-en" content="<?= $titleEN; ?>" id="title-en">

	<link rel="stylesheet" href=" https://unpkg.com/accordion-js@3.1.1/dist/accordion.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/header.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/aside.css">
	<link rel="stylesheet" href="css/footer.css">
	<script src="https://unpkg.com/accordion-js@3.1.1/dist/accordion.min.js"></script>
</head>
<body>
	<header class="header ru_lang" lang="ru">
		<div class="container header_container">
			<div class="header__logo_container">
				<img class="header__logo_img" src="img/saldogroup_logo.png" alt="Логотип Сальдогрупп">
				<p class="header__logo_text">ООО Сальдогрупп</p>
			</div>
			<div class="header__lang__select">
				<button class="en_lang-switcher lang__switcher">English</button>
			</div>
			<button class="header_section__nav-btn" aria-label="меню"></button>
			<div class="header__burger_nav_container">
				<nav class="header__burger__nav">
					<ul class="burger__nav__list">
						<li class="burger__nav__list_item">
							<a href="#about_ru" class="burger__nav__list_item-link">О компании</a>
						</li>
						<li class="burger__nav__list_item">
							<a href="#services_ru" class="burger__nav__list_item-link">Услуги</a>
						</li>
						<li class="burger__nav__list_item">
							<a href="#contacts_ru" class="burger__nav__list_item-link">Контакты</a>
						</li>
					</ul>
					<!-- <form class="header__burger__search_form" action="#" aria-labelledby="site-search2">  поиск пока не подключен
						<input type="search" id="site-search2" name="search" class="header__burger__search-input">
						<button class="header__burger__search-btn" aria-label="Поиск по сайту"></button>
					</form>
					<form class="header__burger__form-small" action="#" aria-labelledby="site-search3">  поиск пока не подключен
						<input type="search" id="site-search3" name="search" class="burger__search-small-input">
						<button class="burger__search-small-btn" aria-label="Поиск по сайту"></button>
					</form> -->
				</nav>
			</div>
			<nav class="header__nav">
				<ul class="nav__list">
					<li class="nav__list_item">
						<a href="#about_ru" class="nav__list_item-link">
							О компании
						</a>
					</li>
					<li class="nav__list_item">
						<a href="#services_ru" class="nav__list_item-link">
							Услуги
						</a>
					</li>
					<li class="nav__list_item">
						<a href="#contacts_ru" class="nav__list_item-link">
							Контакты
						</a>
					</li>
				</ul>
				<!-- <form class="header__nav__form" action="#" aria-labelledby="site-search1">    поиск пока не подключен
					<input type="search" id="site-search1" name="search" class="nav__form_input">
					<button class="nav__form_search-btn" aria-label="Поиск по сайту"></button>
				</form> -->
			</nav>
		</div>
	</header>
	<header class="header en_lang" lang="en">
        <div class="container header_container">
            <div class="header__logo_container">
                <img class="header__logo_img" src="img/saldogroup_logo.png" alt="Saldogroup logo image">
                <p class="header__logo_text">LLC Saldogroup</p>
            </div>
			<div class="header__lang__select">
				<button class="ru_lang-switcher lang__switcher">Русский</button>
			</div>
            <button class="header_section__nav-btn" aria-label="navigation"></button>
            <div class="header__burger_nav_container">
                <nav class="header__burger__nav">
                    <ul class="burger__nav__list">
                        <li class="burger__nav__list_item">
                            <a href="#about_en" class="burger__nav__list_item-link">About</a>
                        </li>
                        <li class="burger__nav__list_item">
                            <a href="#services_en" class="burger__nav__list_item-link">Services</a>
                        </li>
                        <li class="burger__nav__list_item">
                            <a href="#contacts_en" class="burger__nav__list_item-link">Contacts</a>
                        </li>
                    </ul>
                    <!-- <form class="header__burger__search_form" action="#" aria-labelledby="site-search2">
                        <input type="search" id="site-search2" name="search" class="header__burger__search-input">
                        <button class="header__burger__search-btn" aria-label="Поиск по сайту"></button>
                    </form>
                    <form class="header__burger__form-small" action="#" aria-labelledby="site-search3">
                        <input type="search" id="site-search3" name="search" class="burger__search-small-input">
                        <button class="burger__search-small-btn" aria-label="Поиск по сайту"></button>
                    </form> -->
                </nav>
            </div>
            <nav class="header__nav">
                <ul class="nav__list">
                    <li class="nav__list_item">
                        <a href="#about_en" class="nav__list_item-link">
                            About
                        </a>
                    </li>
                    <li class="nav__list_item">
                        <a href="#services_en" class="nav__list_item-link">
                            Services
                        </a>
                    </li>
                    <li class="nav__list_item">
                        <a href="#contacts_en" class="nav__list_item-link">
                            Contacts
                        </a>
                    </li>
                </ul>
                <!-- <form class="header__nav__form" action="#" aria-labelledby="site-search1">
                    <input type="search" id="site-search1" name="search" class="nav__form_input">
                    <button class="nav__form_search-btn" aria-label="Поиск по сайту"></button>
                </form> -->
            </nav>
        </div>
    </header>
	<main class="main ru_lang" lang="ru">
		<section class="hero_section">
			<div class="container">
				<div class="hero_section__container">
					<h1 class="main_heading">
						Эффективное развитие вашего бизнеса
					</h1>
					<a href="#services_ru" class="hero_section__services-link">Услуги</a>
				</div>
			</div>
		</section>
		<section class="about_section" id="about_ru">
			<div class="container">
				<h2 class="section_heading">
					О нас
				</h2>
				<p class="about_section__text">
					C 2005 года компания «Сальдогрупп» с успехом оказывает комплекс услуг, направленный на безупречное и высокоэффективное обслуживание бизнес интересов клиентов. Важнейшей сферой деятельности компании «Сальдогрупп» является бухгалтерский учет предприятия. Услуги компании включают в себя подготовку налогового и бухгалтерского учета, восстановление бухгалтерского учета, подготовку налоговой отчетности и многое другое. Специалисты нашей компании эффективно производят восстановление бухучета и налогового учета организаций и индивидуальных предпринимателей. «Сальдогрупп» не только подготавливает и восстанавливает бухгалтерский учет и отчет в налоговые органы; но также представляет интересы организации при проведении проверок налоговыми органами и внебюджетными фондами.
					Также важным направлением нашей деятельности является управленческое и налоговое консультирование: в частности, «Сальдогрупп» окажет помощь в подготовке налоговой отчетности и налоговых деклараций. Грамотное юридическое сопровождение, выполненное сотрудниками нашей компании, позволит избежать существующих правовых сложностей и вовремя предотвратить возникновение новых.
				</p>
			</div>
		</section>
		<section class="services_section" id="services_ru">
			<div class="container">
				<div class="services_section-container">
					<h2 class="section_heading">
							Услуги
					</h2>
					<ul class="services__list accordion__container-ru">
						<li class="services__list_item ac">
							<button class="services__list_item-btn ac-trigger" aria-label="Открыть список">
									Бухгалтерский учет
							</button>
							<div class="services__list_item__accordion_content ac-panel">
								<ol class="services__list_item__accordion_ol ac-text">
									<li class="services__list_item__accordion_list_item">
										Бухгалтерский и налоговый учет организаций и индивидуальных предпринимателей с подготовкой и предоставлением налоговой отчетности
										<ul class="services__list_item__accordion_ul">
											<li class="services__list_item__accordion_list_item">
												Cкладской учет
											</li>
											<li class="services__list_item__accordion_list_item">
												Учет основных средств, бухгалтерский и налоговый учет амортизационных отчислений
											</li>
											<li class="services__list_item__accordion_list_item">
												Расчет заработной платы, отчетность в налоговые органы, в т.ч. по персонифицированному учету и дохода сотрудников
											</li>
										</ul>
									</li>
									<li class="services__list_item__accordion_list_item">
										Ведение отдельных участков бухгалтерии организаций и индивидуальных предпринимателей
									</li>
									<li class="services__list_item__accordion_list_item">
										Подготовка и предоставление отчетности организаций и индивидуальных предпринимателей в налоговые органы, статуправление, внебюджетные фонды
									</li>
									<li class="services__list_item__accordion_list_item">
										Подготовка и предоставление в налоговые органы ежегодных деклараций для физических лиц по форме 3-НДФЛ
									</li>
									<li class="services__list_item__accordion_list_item">
										Восстановление бухгалтерского и налогового учета организаций и индивидуальных предпринимателей
									</li>
									<li class="services__list_item__accordion_list_item">
										Постановка бухгалтерского и налогового учета организаций и индивидуальных предпринимателей
									</li>
									<li class="services__list_item__accordion_list_item">
										Разработка учетной политики
									</li>
									<li class="services__list_item__accordion_list_item">
										Консультирование по вопросам бухгалтерского и налогового учета
									</li>
									<li class="services__list_item__accordion_list_item">
										Подготовка мониторингов законодательства
									</li>
									<li class="services__list_item__accordion_list_item">
										Расчет налоговой нагрузки по предлагаемым схемам сделок с клиентами
									</li>
									<li class="services__list_item__accordion_list_item">
										Проведение инвентаризации с подготовкой документов о результатах инвентаризации
									</li>
									<li class="services__list_item__accordion_list_item">
										Проведение сверок по расчетам с бюджетом организаций и индивидуальных предпринимателей с налоговыми органами и внебюджетными фондами
									</li>
									<li class="services__list_item__accordion_list_item">
										Представление интересов организаций и индивидуальных предпринимателей при проведении проверок налоговыми органами и внебюджетными фондами
									</li>
									<li class="services__list_item__accordion_list_item">
										Предоставление курьерских услуг по предоставлению отчетности в налоговые органы, статуправление, внебюджетные фонды
									</li>
									<li class="services__list_item__accordion_list_item">
										Услуги по внесении изменений в Единый реестр при смене адреса местонахождения, смене генерального директора, изменения видов деятельности
									</li>
									<li class="services__list_item__accordion_list_item">
										Услуги по получению выписки из Единого реестра
									</li>
								</ol>
							</div>
						</li>
						<li class="services__list_item ac">
							<button class="services__list_item-btn ac-trigger" aria-label="Открыть список">
									Налоговое консультирование
							</button>
							<div class="services__list_item__accordion_content ac-panel">
								<ol class="services__list_item__accordion_ol ac-text">
									<li class="services__list_item__accordion_list_item">
										Разработка модели бизнеса с учетом налоговой нагрузки и возникающих налоговых рисков
									</li>
									<li class="services__list_item__accordion_list_item">
										Консультирование по вопросам налогообложения, возникающим в ходе финансово-хозяйственной деятельности, с учетом требований гражданского, таможенного, валютного и трудового законодательства
									</li>
									<li class="services__list_item__accordion_list_item">
										Предоставление экспертных письменных заключений по вопросам о налогах и сборах, подготовка правовых позиций по спорным вопросам налогообложения с учетом сложившейся судебной практики
									</li>
									<li class="services__list_item__accordion_list_item">
										Консультирование по составлению налоговых деклараций
									</li>
									<li class="services__list_item__accordion_list_item">
										Консультирование по вопросам применения международных соглашений об избегании двойного налогообложения
									</li>
									<li class="services__list_item__accordion_list_item">
										Представление интересов клиента в ходе проверок налоговыми и иными контролирующими органами
									</li>
									<li class="services__list_item__accordion_list_item">
										Обжалование решений налоговых инспекций в судах и вышестоящих органах
									</li>
								</ol>
							</div>
						</li>
						<li class="services__list_item ac">
							<button class="services__list_item-btn ac-trigger" aria-label="Открыть список">
									Управленческое консультирование
							</button>
							<div class="services__list_item__accordion_content ac-panel">
								<ol class="services__list_item__accordion_ol ac-text">
									<li class="services__list_item__accordion_list_item">
										Стратегическое управление, включая корректировку и разработку миссии, целей, стратегии, политики, других документов, регламентирующих стратегию клиента
									</li>
									<li class="services__list_item__accordion_list_item">
										Совершенствование организационной структуры, включая экспертизу системы управления, разработку и оптимизацию функциональной и организационной структуры, разработку нормативных документов по организационной структуре, проведение реструктуризации организации
									</li>
									<li class="services__list_item__accordion_list_item">
										Разработка и оптимизация бизнес-процессов
									</li>
									<li class="services__list_item__accordion_list_item">
										Организация систем делопроизводства и документооборота
									</li>
									<li class="services__list_item__accordion_list_item">
										Экспертиза финансового состояния предприятий
									</li>
									<li class="services__list_item__accordion_list_item">
										Разработка бизнес-планов и ТЭО
									</li>
									<li class="services__list_item__accordion_list_item">
										Разработка системы управления финансами, включая разработку форм внутренней финансовой отчетности, системы финансового мониторинга и контроля
									</li>
									<li class="services__list_item__accordion_list_item">
										Разработка и внедрение систем бюджетного планирования и контроля
									</li>
									<li class="services__list_item__accordion_list_item">
										Разработка мероприятий по финансовой реструктуризации, включая оптимизацию финансовых потоков, структуры активов и пр.
									</li>
									<li class="services__list_item__accordion_list_item">
										Постановка управленческого учета
									</li>
									<li class="services__list_item__accordion_list_item">
										Разработка моделей функционирования предприятий в целях налогового планирования
									</li>
								</ol>
							</div>
						</li>
						<li class="services__list_item ac">
							<button class="services__list_item-btn ac-trigger" aria-label="Открыть список">
									Юридические услуги
							</button>
							<div class="services__list_item__accordion_content ac-panel">
								<ol class="services__list_item__accordion_ol ac-text">
									<li class="services__list_item__accordion_list_item">
										Комплексное юридическое сопровождение бизнеса клиента от момента создания, включая разработку правовой структуры бизнеса, схем договорных отношений внутри структуры, постановку работы юридической службы, разработку пакетов типовых документов, разработку корпоративных документов, внутренних нормативно-правовых документов
									</li>
									<li class="services__list_item__accordion_list_item">
										Замена корпоративного юриста клиента группой консультантов, осуществляющих устное и письменное консультирование по широкому кругу юридических вопросов, экспертизу договоров, управленческих и корпоративных документов
									</li>
									<li class="services__list_item__accordion_list_item">
										Проведение Due Dilligence – экспертизы бизнеса на предмет наличия правовых рисков (в частности – рисков применения санкций к предприятиям бизнеса, признания незаконными совершенных сделок и принятых решений, принудительной ликвидации предприятий бизнеса, рисков предъявления к предприятиям бизнеса исковых требований со стороны третьих лиц и т.д.), вытекающих из процедур создания или функционирования бизнеса
									</li>
									<li class="services__list_item__accordion_list_item">
										Представление и защита интересов клиента в государственных органах, в органах исполнительной власти, в арбитражном и гражданском судах, арбитражах и третейских судах, включая разработку правовой позиции для клиента и непосредственное участие наших консультантов в процессуальных действиях, переговорах, совещаниях и т.д.
									</li>
									<li class="services__list_item__accordion_list_item">
										Представление интересов клиентов при проведении переговоров с российскими и иностранными контрагентами и оформлении сделок
									</li>
									<li class="services__list_item__accordion_list_item">
										Международное налоговое планирование
									</li>
									<li class="services__list_item__accordion_list_item">
										Сопровождение заключения хозяйственных сделок, включая разработку проектов договоров в интересах клиента, участие в переговорах с контрагентами, согласование условий сделки
									</li>
									<li class="services__list_item__accordion_list_item">
										Письменное и устное юридическое консультирование по широкому кругу вопросов Российского законодательства, применительно к коммерческой деятельности клиента
									</li>
									<li class="services__list_item__accordion_list_item">
										Мониторинг изменений действующего законодательства
									</li>
									<li class="services__list_item__accordion_list_item">
										Правовая помощь при регистрации юридических лиц за рубежом, открытии представительств иностранных юридических лиц на территории Российской Федерации
									</li>
									<li class="services__list_item__accordion_list_item">
										Правовая помощь при регистрации выпусков ценных бумаг, проспектов эмиссий в Федеральной Комиссии РФ по ценным бумагам
									</li>
								</ol>
							</div>
						</li>
						<li class="services__list_item ac">
							<button class="services__list_item-btn ac-trigger" aria-label="Открыть список">
									Сопровождение международных проектов
							</button>
							<div class="services__list_item__accordion_content ac-panel">
								<ol class="services__list_item__accordion_ol ac-text">
									<li class="services__list_item__accordion_list_item">
										Анализ потенциальной возможности привлечения иностранных инвесторов
									</li>
									<li class="services__list_item__accordion_list_item">
										Разработка эффективной структуры собственности бизнеса, благоприятной для привлечения иностранных инвестиций
									</li>
									<li class="services__list_item__accordion_list_item">
										Оказание поддержки при внедрении выработанных структур
									</li>
									<li class="services__list_item__accordion_list_item">
										Анализ существующих отношений с иностранными компаниями с точки зрения налоговых последствий и применения практики соглашений об избежании двойного налогообложения
									</li>
									<li class="services__list_item__accordion_list_item">
										Анализ и разработка договоров и соглашений с иностранными партнерами с учетом требований международного и внутренних законодательств
									</li>
									<li class="services__list_item__accordion_list_item">
										Поддержка при образовании и постановке на учет постоянных представительств иностранных организаций в Российской Федерации
									</li>
									<li class="services__list_item__accordion_list_item">
										Ведение учета и сдача отчетности представительств иностранных юридических лиц в Российской Федерации
									</li>
								</ol>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</section>
	</main>
	<main class="main en_lang" lang="en">
        <section class="hero_section">
            <div class="container">
                <div class="hero_section__container">
                    <h1 class="main_heading">
                        Effective development of your business
                    </h1>
                    <a href="#services_en" class="hero_section__services-link">Services</a>
                </div>
            </div>
        </section>
        <section class="about_section" id="about_en">
            <div class="container">
                <h2 class="section_heading">
                    About
                </h2>
                <p class="about_section__text">
                    Since 2005 Saldogroup company has been successfully providing a range of services aimed at impeccable and highly efficient servicing of the business interests of clients. The most important area of ​​activity of the company is the accounting of the enterprise. The services of the company include preparation of tax and accounting records, restoration of accounting records, preparation of tax reports and much more. The specialists of our company effectively carry out the restoration of accounting and tax accounting of organizations and individual entrepreneurs. </br> Saldogroup not only prepares and restores accounting records and reports to the tax authorities; but also represents the interests of the organization during audits by tax authorities and extra-budgetary funds.
                </p>
            </div>
        </section>
        <section class="services_section" id="services_en">
            <div class="container">
                <div class="services_section-container">
                    <h2 class="section_heading">
                        Services
                    </h2>
                    <ul class="services__list accordion__container-en">
                        <li class="services__list_item ac">
                            <button class="services__list_item-btn ac-trigger" aria-label="Open the list">
                                Accounting
                            </button>
                            <div class="services__list_item__accordion_content ac-panel">
                                <ol class="services__list_item__accordion_ol ac-text">
                                    <li class="services__list_item__accordion_list_item">
                                        Accounting and tax accounting of organizations and individual entrepreneurs with the preparation and submission of tax reports
                                        <ul class="services__list_item__accordion_ul">
                                            <li class="services__list_item__accordion_list_item">
                                                Warehouse accounting
                                            </li>
                                            <li class="services__list_item__accordion_list_item">
                                                Accounting for fixed assets, accounting and tax accounting of depreciation deductions
                                            </li>
                                            <li class="services__list_item__accordion_list_item">
                                                Payroll accounting, reporting to tax authorities, incl. for personalized accounting and employee income
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="services__list_item__accordion_list_item">
                                        Keeping separate sections of accounting for organizations and individual entrepreneurs
                                    </li>
                                    <li class="services__list_item__accordion_list_item">
                                        Preparation and submission of reports of organizations and individual entrepreneurs to tax authorities, statistical department, off-budget funds
                                    </li>
                                    <li class="services__list_item__accordion_list_item">
                                        Preparation and submission to the tax authorities of annual returns for individuals in the form of "3-НДФЛ"
                                    </li>
                                    <li class="services__list_item__accordion_list_item">
                                        Restoration of accounting and tax accounting of organizations and individual entrepreneurs
                                    </li>
                                    <li class="services__list_item__accordion_list_item">
                                        Organization of accounting and tax accounting of organizations and individual entrepreneurs
                                    </li>
                                    <li class="services__list_item__accordion_list_item">
                                        Accounting policy development
                                    </li>
                                    <li class="services__list_item__accordion_list_item">
                                        Consulting on accounting and tax accounting issues
                                    </li>
                                    <li class="services__list_item__accordion_list_item">
                                        Legislation monitoring
                                    </li>
                                    <li class="services__list_item__accordion_list_item">
                                        Calculation of the tax burden for the proposed schemes of transactions with clients
                                    </li>
                                    <li class="services__list_item__accordion_list_item">
                                        Conducting an inventory with the preparation of documents on the results of the inventory
                                    </li>
                                    <li class="services__list_item__accordion_list_item">
                                        Reconciliation of settlements with the budget of organizations and individual entrepreneurs with tax authorities and extra-budgetary funds
                                    </li>
                                    <li class="services__list_item__accordion_list_item">
                                        Representing the interests of organizations and individual entrepreneurs during inspections by tax authorities and extra-budgetary funds
                                    </li>
                                    <li class="services__list_item__accordion_list_item">
                                        Provision of courier services for reporting to tax authorities, statistical department, off-budget funds
                                    </li>
                                    <li class="services__list_item__accordion_list_item">
                                        Services for making changes to the Unified Register when changing the address of location, changing the general director, changing the types of activities
                                    </li>
                                    <li class="services__list_item__accordion_list_item">
                                        Services for obtaining information from the Unified Register
                                    </li>
                                </ol>
                            </div>
                        </li>
                        <li class="services__list_item ac">
                            <button class="services__list_item-btn ac-trigger" aria-label="Open the list">
                                Tax consulting
                            </button>
                            <div class="services__list_item__accordion_content ac-panel">
                                <ol class="services__list_item__accordion_ol ac-text">
                                    <li class="services__list_item__accordion_list_item">
                                        Development of a business model taking into account the tax burden and emerging tax risks
                                    </li>
                                    <li class="services__list_item__accordion_list_item">
                                        Consulting on taxation issues arising in the course of financial and economic activities, taking into account the requirements of civil, customs, currency and labor legislation
                                    </li>
                                    <li class="services__list_item__accordion_list_item">
                                        Providing experts opinions on taxes and fees, preparation of legal positions on controversial tax issues, taking into account the existing judicial practice
                                    </li>
                                    <li class="services__list_item__accordion_list_item">
                                        Consulting on the preparation of tax returns
                                    </li>
                                    <li class="services__list_item__accordion_list_item">
                                        Consulting on the application of international agreements on the avoidance of double taxation
                                    </li>
                                    <li class="services__list_item__accordion_list_item">
                                        Representing the client's interests during audits by tax and other regulatory authorities
                                    </li>
                                    <li class="services__list_item__accordion_list_item">
                                        Appealing decisions of tax inspectorates in courts and higher authorities
                                    </li>
                                </ol>
                            </div>
                        </li>
                        <li class="services__list_item ac">
                            <button class="services__list_item-btn ac-trigger" aria-label="Open the list">
                                Management consulting
                            </button>
                            <div class="services__list_item__accordion_content ac-panel">
                                <ol class="services__list_item__accordion_ol ac-text">
                                    <li class="services__list_item__accordion_list_item">
                                        Strategic management, including adjusting and developing a mission, goals, strategy, policy, and other documents regulating the client's strategy
                                    </li>
                                    <li class="services__list_item__accordion_list_item">
                                        Improvement of the organizational structure, including the examination of the management system, the development and optimization of the functional and organizational structure, the development of regulatory documents on the organizational structure, the restructuring of the organization
                                    </li>
                                    <li class="services__list_item__accordion_list_item">
                                        Development and optimization of business processes
                                    </li>
                                    <li class="services__list_item__accordion_list_item">
                                        Organization of document management systems
                                    </li>
                                    <li class="services__list_item__accordion_list_item">
                                        Examination of the financial condition of enterprises
                                    </li>
                                    <li class="services__list_item__accordion_list_item">
                                        Development of business plans and feasibility studies
                                    </li>
                                    <li class="services__list_item__accordion_list_item">
                                        Development of a financial management system, including the development of forms of internal financial reporting, a system of financial monitoring and control
                                    </li>
                                    <li class="services__list_item__accordion_list_item">
                                        Development and implementation of budget planning and control systems
                                    </li>
                                    <li class="services__list_item__accordion_list_item">
                                        Development of measures for financial restructuring, including optimization of financial flows, asset structure, etc.
                                    </li>
                                    <li class="services__list_item__accordion_list_item">
                                        Organization of management accounting
                                    </li>
                                    <li class="services__list_item__accordion_list_item">
                                        Development of business models for tax planning purposes
                                    </li>
                                </ol>
                            </div>
                        </li>
                        <li class="services__list_item ac">
                            <button class="services__list_item-btn ac-trigger" aria-label="Open the list">
                                Legal services
                            </button>
                            <div class="services__list_item__accordion_content ac-panel">
                                <ol class="services__list_item__accordion_ol ac-text">
                                    <li class="services__list_item__accordion_list_item">
                                        Comprehensive legal support of the client's business from the moment of creation, including the development of the legal structure of the business, schemes of contractual relations within the structure, the organization of the work of the legal service, the development of packages of standard documents, the development of corporate documents, internal regulatory documents
                                    </li>
                                    <li class="services__list_item__accordion_list_item">
                                        Replacement of the client's corporate lawyer with a group of consultants providing oral and written advice on a wide range of legal issues, examination of contracts, management and corporate documents
                                    </li>
                                    <li class="services__list_item__accordion_list_item">
                                        Conducting Due Dilligence - examination of a business for the presence of legal risks (in particular - the risks of applying sanctions to business enterprises, recognition of illegal transactions and decisions made, compulsory liquidation of business enterprises, risks of making claims against business enterprises by third parties, etc. .) arising from the procedures for creating or operating a business
                                    </li>
                                    <li class="services__list_item__accordion_list_item">
                                        Representation and protection of the client's interests in government agencies, in executive authorities, in arbitration and civil courts, arbitration and arbitration courts, including the development of a legal position for the client and the direct participation of our consultants in legal proceedings, negotiations, meetings, etc.
                                    </li>
                                    <li class="services__list_item__accordion_list_item">
                                        Representation of clients' interests during negotiations with Russian and foreign counterparties and execution of transactions
                                    </li>
                                    <li class="services__list_item__accordion_list_item">
                                        International tax planning
                                    </li>
                                    <li class="services__list_item__accordion_list_item">
                                        Legal support in the conclusion of business transactions, including the development of draft agreements in the interests of the client, participation in negotiations with counterparties, negotiation of the terms of the transaction
                                    </li>
                                    <li class="services__list_item__accordion_list_item">
                                        Legal advices on a wide range of issues of Russian legislation in relation to the client's commercial activities
                                    </li>
                                    <li class="services__list_item__accordion_list_item">
                                        Monitoring changes in current legislation
                                    </li>
                                    <li class="services__list_item__accordion_list_item">
                                        Legal assistance in registering legal entities abroad, opening representative offices of foreign legal entities on the territory of the Russian Federation
                                    </li>
                                    <li class="services__list_item__accordion_list_item">
                                        Legal assistance in the issue of securities, prospectuses in the Federal Commission of the Russian Federation on Securities
                                    </li>
                                </ol>
                            </div>
                        </li>
                        <li class="services__list_item ac">
                            <button class="services__list_item-btn ac-trigger" aria-label="Open the list">
                                Support of international projects
                            </button>
                            <div class="services__list_item__accordion_content ac-panel">
                                <ol class="services__list_item__accordion_ol ac-text">
                                    <li class="services__list_item__accordion_list_item">
                                        Analysis of the potential for attracting foreign investors
                                    </li>
                                    <li class="services__list_item__accordion_list_item">
                                        Development of an effective business ownership structure, favorable for attracting foreign investment
                                    </li>
                                    <li class="services__list_item__accordion_list_item">
                                        Providing support in the implementation of the developed structures
                                    </li>
                                    <li class="services__list_item__accordion_list_item">
                                        Analysis of existing relations with foreign companies in terms of tax consequences and the application of the practice of treaties to avoid double taxation
                                    </li>
                                    <li class="services__list_item__accordion_list_item">
                                        Analysis and development of contracts and agreements with foreign partners, taking into account the requirements of international and domestic legislation
                                    </li>
                                    <li class="services__list_item__accordion_list_item">
                                        Support in the formation and registration of permanent missions of foreign organizations in the Russian Federation
                                    </li>
                                    <li class="services__list_item__accordion_list_item">
                                        Keeping records and submission of reports of representative offices of foreign legal entities in the Russian Federation
                                    </li>
                                </ol>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
    </main>
	<aside class="circle_section ru_lang" lang="ru">
		<div class="container circle_section-container">
			<h2 class="section_heading circle_section__heading">
				16 лет<br>безупречной<br>репутации
			</h2>
			<p class="circle_section__text">
				Развитие бизнеса клиента, правильное построение структуры собственности и управления, эффективный контроль и внедрение принятых решений - наша основная цель и главная задача.
				Стоимость услуг нашей компании определяется видом работы и сложностью того или иного юридического процесса. В целом экономия средств налицо, так как стоимость бухгалтерского обслуживания и других услуг у квалифицированных специалистов нашей компании ниже, чем Ваши возможные затраты на собственного штатного бухгалтера. А качество работы при этом на порядок выше.
			</p>
		</div>
	</aside>
	<aside class="circle_section en_lang" lang="en">
		<div class="container circle_section-container">
				<h2 class="section_heading circle_section__heading">
					16 years<br>of impeccable<br>reputation
				</h2>
				<p class="circle_section__text">
					The development of the client's business, the correct construction of the ownership and management structure, effective control and implementation of solutions are our main goal and main task.
					The cost of our company's services includes the work and complexity of a particular legal process. In general, the savings are obvious, since the cost of accounting services and other services from qualified specialists of the company is lower than your possible costs for your own in-house accountant. And the quality of work is much higher.
				</p>
		</div>
	</aside>
	<footer class="footer ru_lang" id="contacts_ru" lang="ru">
		<div class="container footer_container">
			<div class="footer__content_container">
				<div class="footer__logo_container">
					<img class="footer__logo_img" src="img/saldogroup_logo.png" alt="Логотип Сальдогрупп">
					<p class="footer__logo_text">ООО Сальдогрупп</p>
				</div>
				<h2 class="section_heading footer__section_heading">
					Давайте работать вместе
				</h2>
				<address class="footer__contacts">
					<div class="contacts_container">
						<a href="tel:+74959847678" class="footer__tel">+7 (495) 984-76-78</a>
						<a href="mailto:info@saldogroup.ru" class="footer__email"> info@saldogroup.ru</a>
					</div>
					<p class="footer__address_text">
						113824
						Российская&nbsp;Федерация
						город&nbsp;Москва
						Дербеневская&nbsp;набережная
						дом&nbsp;7&nbsp;строение&nbsp;16
					</p>
				</address>
				<iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A6216c9a9101a7148480cbe6e1d32d75406abc10b7be7d414a6795b0220281463&amp;source=constructor"></iframe>
			</div>
		</div>
	</footer>
	<footer class="footer en_lang" id="contacts_en" lang="en">
        <div class="container footer_container">
            <div class="footer__content_container">
                <div class="footer__logo_container">
                    <img class="footer__logo_img" src="img/saldogroup_logo.png" alt="Логотип Сальдогрупп">
                    <p class="footer__logo_text">LLC Saldogroup</p>
                </div>
                <h2 class="section_heading footer__section_heading">
                    Let's work together
                </h2>
                <address class="footer__contacts">
                    <div class="contacts_container">
                        <a href="tel:+74959847678" class="footer__tel">+7 (495) 984-76-78</a>
                        <a href="mailto:info@saldogroup.ru" class="footer__email"> info@saldogroup.ru</a>
                    </div>
                    <p class="footer__address_text">
                        113824
                        Russian&nbsp;Federation</br>
                        Moscow</br>
                        Derbenevskaya&nbsp;embankment
                        house&nbsp;7&nbsp;building&nbsp;16
                    </p>
                </address>
                <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A6216c9a9101a7148480cbe6e1d32d75406abc10b7be7d414a6795b0220281463&amp;source=constructor"></iframe>
            </div>
        </div>
	</footer>
	<span class="up_btn"><a></a></span>
	<script src="js/script.js"></script>
</body>
</html>
