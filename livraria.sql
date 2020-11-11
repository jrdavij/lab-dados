-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2020 at 07:58 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `livraria`
--

-- --------------------------------------------------------

--
-- Table structure for table `livros`
--

CREATE TABLE `livros` (
  `id` int(5) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `autor` varchar(100) NOT NULL,
  `editora` varchar(100) NOT NULL,
  `ano` varchar(100) NOT NULL,
  `isbn` varchar(100) NOT NULL,
  `resenha` varchar(1300) NOT NULL,
  `estado` varchar(100) NOT NULL,
  `preco` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `livros`
--

INSERT INTO `livros` (`id`, `nome`, `autor`, `editora`, `ano`, `isbn`, `resenha`, `estado`, `preco`) VALUES
(3, 'Assassin\'s Creed - A Cruzada Secreta ', 'Oliver Bowden', 'Galera Record', '2012', '9788501089344', 'Nicollò Pollo, pai do explorador Marco, finalmente revela a história que manteve em segredo durante toda a vida – a história de Altair, um dos primeiros assassinos do Credo. É o curso da aventura de Altair em Constantinopla que irá selar o destino dos Templários e de sua saga na Europa.', 'Apenas marcas de uso', '20,12'),
(4, 'Anjo Mecânico', 'Cassandra Clare', 'Galera Record', '2012', '9788501092687', 'Anjo Mecânico', 'Impecável; sem marcas, nem manchas, sem rasgos.', '4355'),
(5, 'O ladrão de Raios - Percy Jackson e os Olimpianos', 'Rick Riordan', 'Intrínseca', '2014', '978-8580575392', 'Em O ladrão de raios, Percy Jackson, o menino que aos doze anos\r\ndescobre que é um semideus, filho de Poseidon, precisa impedir\r\numa guerra entre os deuses que destruiria a civilização ocidental;\r\nem O Mar de Monstros, ele e os amigos se envolvem em uma\r\nperigosa aventura para defender o acampamento dos semideuses;\r\nem A maldição do titã, Percy descobre que o Senhor dos Titãs\r\ndespertou e está disposto a destruir a humanidade; em A batalha do\r\nLabirinto, o semideus vai combater o perigoso titã no temido\r\nLabirinto de Dédalo; e em O último olimpiano, Percy tem que lidar\r\nnão só com o exército de Cronos, mas também com a chegada de\r\nseu décimo sexto aniversário — e, assim, com a profecia que\r\ndeterminará seu destino.', 'Apenas sem capa', '343'),
(7, 'O Nome do Vento', 'Patrick Rothfuss', 'Arqueiro', '2009', '978-8599296493', 'Ninguém sabe ao certo quem é o herói ou o vilão desse fascinante\r\nuniverso criado por Patrick Rothfuss. Na realidade, essas duas\r\nfiguras se concentram em Kote, um homem enigmático que se\r\nesconde sob a identidade de proprietário da hospedaria Marco do\r\nPercurso. Da infância numa trupe de artistas itinerantes, passando\r\npelos anos vividos numa cidade hostil e pelo esforço para ingressar\r\nna escola de magia, O nome do vento acompanha a trajetória de\r\nKote e as duas forças que movem sua vida: o desejo de aprender o\r\nmistério por trás da arte de nomear as coisas e a necessidade de\r\nreunir informações sobre o Chandriano – os lendários demônios que\r\nassassinaram sua família no passado. Quando esses seres do mal\r\nreaparecem na cidade, um cronista suspeita de que o misterioso\r\nKote seja o personagem principal de diversas histórias que rondam a\r\nregião e decide aproximar-se dele para descobrir a verdade. Pouco a\r\npouco, a história de Kote vai sendo revelada, assim como sua\r\nmultifacetada personalidade – notório mago, esmerado ladrão,\r\namante viril, herói salvador, músico magistral, assassino infame.\r\nNesta provocante narrativa, o leitor é transportado para um mundo\r\nfantástico, repleto de mitos e seres fabulosos, heróis e vilões,\r\nladrões e trovadores, amor e ódio, paixão e vingança.', 'Há um corte na capa.', '444'),
(8, 'A Rebelde do Deserto', 'Alwyn Hamilton', 'Seguinte', '2016', '978-8565765992', 'O destino do deserto está nas mãos de Amani Al’Hiza ― uma\r\ngarota feita de fogo e pólvora, com o dedo sempre no gatilho. O\r\ndeserto de Miraji é governado por mortais, mas criaturas míticas\r\nrondam as áreas mais selvagens e remotas, e há boatos de que, em\r\nalgum lugar, os djinnis ainda praticam magia. De toda maneira, para\r\nos humanos o deserto é um lugar impiedoso, principalmente se\r\nvocê é pobre, órfão ou mulher. Amani Al’Hiza é as três coisas.\r\nApesar de ser uma atiradora talentosa, dona de uma mira perfeita,\r\nela não consegue escapar da Vila da Poeira, uma cidadezinha\r\nisolada que lhe oferece como futuro um casamento forçado e a vida\r\nsubmissa que virá depois dele. Para Amani, ir embora dali é mais do\r\nque um desejo ― é uma necessidade. Mas ela nunca imaginou que\r\nfugiria galopando num cavalo mágico com o exército do sultão na\r\nsua cola, nem que um forasteiro misterioso seria responsável por\r\nlhe revelar o deserto que ela achava que conhecia e uma força que\r\nela nem imaginava possuir.', 'Bom estado. Folhas amareladas apenas', '3'),
(9, 'A Bússula de Ouro', 'Philip Pullman', 'Suma', '2017', '9788573028423', 'Lyra Belacqua e seu daemon, Pantalaimon, vivem felizes e soltos\r\nentre os catedráticos da Faculdade Jordan, em Oxford. Até que\r\nrumores invadem a cidade - são boatos sobre os Papões,\r\nsequestradores de crianças que estão espalhando o medo pelo país.\r\nQuando seu melhor amigo, Roger, desaparece, Lyra entra em uma\r\nperigosa jornada para reencontrá-lo. O que ela não desconfia é que\r\nmuitas outras forças influenciam seu destino e que sua aventura a\r\nlevará às terras congeladas do Norte, onde feiticeiras e ursos de\r\narmadura se preparam para uma guerra. Embora tenha a ajuda do\r\naletiômetro - um poderoso instrumento que responde a qualquer\r\npergunta -, nada a prepara para os mistérios e a crueldade que\r\nencontra durante a viagem. E, mesmo que ainda não saiba, Lyra tem\r\numa profecia a cumprir, e as consequências afetarão muitos mundos\r\nalém do dela.', 'Só possui metade do livro em estado catastrófico', '44'),
(10, 'Menina Bonita do Laço de Fita', 'Ana Maria Machado', 'Ática', '2019', '978-8508147595', 'Uma linda menina negra desperta a admiração de um coelho\r\nbranco, que deseja ter uma filha tão pretinha quanto ela. Cada vez\r\nque ele lhe pergunta qual o segredo de sua cor, ela inventa uma\r\nhistória. O coelho segue todos os “conselhos” da menina, mas\r\ncontinua branco.', 'Livro em perfeito estado', '5'),
(11, 'IT- O PATO', 'Stephen King', 'Suma', '2014', '9788560280940', 'Durante as férias escolares de 1958, em Derry, pacata cidadezinha\r\ndo Maine, Bill, Richie, Stan, Mike, Eddie, Ben e Beverly aprenderam\r\no real sentido da amizade, do amor, da confiança e... do medo. O\r\nmais profundo e tenebroso medo. Naquele verão, eles enfrentaram\r\npela primeira vez a Coisa, um ser sobrenatural e maligno que deixou\r\nterríveis marcas de sangue em Derry. Quase trinta anos depois, os\r\namigos voltam a se encontrar. Uma nova onda de terror tomou a\r\npequena cidade. Mike Hanlon, o único que permanece em Derry, dá\r\no sinal. Precisam unir forças novamente. A Coisa volta a atacar e\r\neles devem cumprir a promessa selada com sangue que fizeram\r\nquando crianças. Só eles têm a chave do enigma. Só eles sabem o\r\nque se esconde nas entranhas de Derry. O tempo é curto, mas\r\nsomente eles podem vencer a Coisa. Em \'It - A Coisa\', clássico de\r\nStephen King em nova edição, os amigos irão até o fim, mesmo que\r\nisso signifique ultrapassar os próprios limites.', 'Ótimo estado. Acompanha o palhacinho feliz', '17'),
(12, 'Doctor Who - Mortalha da Lamentação', 'Tommy Donbavand', 'Suma', '2015', '9788581052649', 'Doctor Who é a série de ficção científica mais antiga no ar e uma\r\ndas mais cultuadas no mundo. Veiculada no Brasil pela TV Cultura e\r\na BBC HD, série britânica de TV completou 50 anos em novembro\r\nde 2013 com grande repercussão, sendo o programa do gênero\r\ntransmitido há mais tempo e para mais países no mundo. Em Doctor\r\nWho - Mortalha da lamentação, é o dia seguinte ao assassinato de\r\nJohn F. Kennedy - e o rosto de pessoas mortas começa a aparecer\r\npor toda parte. O guarda Reg Cranfield vê o pai na névoa densa ao\r\nlongo da estrada Totter Lane. A repórter Mae Callon vê a avó em\r\numa mancha de café na mesa de trabalho. O agente especial do\r\nFBI Warren Skeet se depara com seu parceiro falecido há muitos\r\nanos olhando para ele através das gotas de chuva no vidro da\r\njanela. Então os rostos começam a falar e gritar. São as Mortalhas,\r\nque se alimentam da tristeza alheia, atacando a Terra. Será que o\r\nDoutor conseguirá superar o próprio luto para salvar a humanidade? ', 'Bom estado. Porém sem as primeiras 25 páginas', '88'),
(13, 'O Meu Pé de Laranja Lima', 'José Mauro de Vasconcelos', 'Melhoramentos', '1969', '9788506042069', 'Na obra juvenil mais conhecida de José Mauro, a pobreza, a solidão\r\ne o desajuste social vistos pelos olhos ingênuos de uma criança de\r\nseis anos. Nascido em uma família pobre e numerosa, Zezé é um\r\nmenino especial, que envolve o leitor ao revelar seus sonhos e\r\ndesejos, por meio de conversas com o seu pé de laranja lima,\r\nencontrando na fantasia a alegria de viver.', 'Bem conservado.', '22'),
(20, 'www', 'Oliver Bowden', 'Galera Record', '2012', '9788501089344', 'qweqwew', 'Apenas marcas de usos', '20,12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `livros`
--
ALTER TABLE `livros`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `livros`
--
ALTER TABLE `livros`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
