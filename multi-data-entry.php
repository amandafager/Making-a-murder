<?php 

// makes our database connection into an esier managebale function
function db():PDO {

    // path to our db file
    $dir = 'sqlite:/'. __DIR__ .'/murder_mystery.sqlite3';
    $options = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ];
    try {
        $pdo = new PDO($dir, '', '',  $options); //tries to connect to our databse using $path, $username, $passowrd, $options 
    } catch (\PDOException $e) {
        throw new \PDOException($e->getMessage(), (int)$e->getCode()); //sends out an error message if it fails to connect.
    }

    return $pdo;
}
$query = "insert into interview (person_id, transcript, case_id, witness_name, date, city) values ('0093-5289', 'Morbi quis tortor id nulla ultrices aliquet. Maecenas leo odio, condimentum id, luctus nec, molestie sed, justo. Pellentesque viverra pede ac diam. Cras pellentesque volutpat dui.', '21.95.232.249/4', 'Suzi Farries', '2/16/2020', 'Höganäs');
insert into interview (person_id, transcript, case_id, witness_name, date, city) values ('76439-326', 'Quisque porta volutpat erat. Quisque erat eros, viverra eget, congue eget, semper rutrum, nulla. Nunc purus. Phasellus in felis. Donec semper sapien a libero. Nam dui. Proin leo odio, porttitor id, consequat in, consequat ut, nulla. Sed accumsan felis.', '59.108.215.65/17', 'Roda Woolmington', '2/11/2020', 'Yongtai');
insert into interview (person_id, transcript, case_id, witness_name, date, city) values ('55715-001', 'Fusce consequat. Nulla nisl. Nunc nisl. Duis bibendum, felis sed interdum venenatis, turpis enim blandit mi, in porttitor pede justo eu massa. Donec dapibus. Duis at velit eu est congue elementum. In hac habitasse platea dictumst. Morbi vestibulum, velit id pretium iaculis, diam erat fermentum justo, nec condimentum neque sapien placerat ante.', '64.70.99.47/9', 'Audre Delaprelle', '12/22/2020', 'Jinhe');
insert into interview (person_id, transcript, case_id, witness_name, date, city) values ('51655-111', 'Nullam varius. Nulla facilisi. Cras non velit nec nisi vulputate nonummy. Maecenas tincidunt lacus at velit. Vivamus vel nulla eget eros elementum pellentesque. Quisque porta volutpat erat. Quisque erat eros, viverra eget, congue eget, semper rutrum, nulla. Nunc purus. Phasellus in felis.', '75.21.127.49/18', 'Chester Burchatt', '11/23/2020', 'Rattanawapi');
insert into interview (person_id, transcript, case_id, witness_name, date, city) values ('47593-114', 'Pellentesque ultrices mattis odio. Donec vitae nisi. Nam ultrices, libero non mattis pulvinar, nulla pede ullamcorper augue, a suscipit nulla elit ac nulla. Sed vel enim sit amet nunc viverra dapibus. Nulla suscipit ligula in lacus. Curabitur at ipsum ac tellus semper interdum. Mauris ullamcorper purus sit amet nulla. Quisque arcu libero, rutrum ac, lobortis vel, dapibus at, diam.', '170.101.28.163/25', 'Linn Bater', '4/4/2020', 'Sovetskoye');
insert into interview (person_id, transcript, case_id, witness_name, date, city) values ('56136-007', 'Nam ultrices, libero non mattis pulvinar, nulla pede ullamcorper augue, a suscipit nulla elit ac nulla. Sed vel enim sit amet nunc viverra dapibus.', '60.127.192.18/14', 'Henryetta Stubbings', '10/25/2020', 'Pallanchacra');
insert into interview (person_id, transcript, case_id, witness_name, date, city) values ('36987-3147', 'Curabitur in libero ut massa volutpat convallis. Morbi odio odio, elementum eu, interdum eu, tincidunt in, leo. Maecenas pulvinar lobortis est. Phasellus sit amet erat. Nulla tempus. Vivamus in felis eu sapien cursus vestibulum.', '154.86.191.140/21', 'Friedrich Matissoff', '10/22/2020', 'Obernai');
insert into interview (person_id, transcript, case_id, witness_name, date, city) values ('51079-801', 'Cras in purus eu magna vulputate luctus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vivamus vestibulum sagittis sapien. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Etiam vel augue.', '35.158.24.153/7', 'Lara Chipman', '9/5/2020', 'Amerta');
insert into interview (person_id, transcript, case_id, witness_name, date, city) values ('27281-002', 'Mauris enim leo, rhoncus sed, vestibulum sit amet, cursus id, turpis. Integer aliquet, massa id lobortis convallis, tortor risus dapibus augue, vel accumsan tellus nisi eu orci. Mauris lacinia sapien quis libero. Nullam sit amet turpis elementum ligula vehicula consequat. Morbi a ipsum. Integer a nibh. In quis justo. Maecenas rhoncus aliquam lacus. Morbi quis tortor id nulla ultrices aliquet.', '101.238.242.197/24', 'Kele Incogna', '8/8/2020', 'Nakhon Si Thammarat');
insert into interview (person_id, transcript, case_id, witness_name, date, city) values ('42507-580', 'In hac habitasse platea dictumst. Etiam faucibus cursus urna. Ut tellus. Nulla ut erat id mauris vulputate elementum. Nullam varius.', '176.236.202.240/29', 'Elysee Ilyenko', '4/16/2020', 'Guagua');
insert into interview (person_id, transcript, case_id, witness_name, date, city) values ('36987-2366', 'Suspendisse potenti. Nullam porttitor lacus at turpis. Donec posuere metus vitae ipsum. Aliquam non mauris. Morbi non lectus. Aliquam sit amet diam in magna bibendum imperdiet. Nullam orci pede, venenatis non, sodales sed, tincidunt eu, felis. Fusce posuere felis sed lacus.', '232.108.102.134/17', 'Elicia Brockman', '9/1/2020', 'Toledo');
insert into interview (person_id, transcript, case_id, witness_name, date, city) values ('52904-468', 'Vivamus vestibulum sagittis sapien. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Etiam vel augue. Vestibulum rutrum rutrum neque. Aenean auctor gravida sem.', '220.13.243.160/11', 'Sonnnie Pikett', '12/10/2020', 'Geser');
insert into interview (person_id, transcript, case_id, witness_name, date, city) values ('55111-468', 'Vivamus vestibulum sagittis sapien. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.', '68.43.206.83/5', 'Garrot Ayars', '8/26/2020', 'San Pablo');
insert into interview (person_id, transcript, case_id, witness_name, date, city) values ('68647-182', 'Vestibulum sed magna at nunc commodo placerat. Praesent blandit. Nam nulla. Integer pede justo, lacinia eget, tincidunt eget, tempus vel, pede. Morbi porttitor lorem id ligula. Suspendisse ornare consequat lectus. In est risus, auctor sed, tristique in, tempus sit amet, sem. Fusce consequat. Nulla nisl. Nunc nisl.', '22.4.169.12/27', 'Sabrina Freestone', '3/15/2020', 'Hetoudian');
insert into interview (person_id, transcript, case_id, witness_name, date, city) values ('76268-001', 'Maecenas tincidunt lacus at velit. Vivamus vel nulla eget eros elementum pellentesque. Quisque porta volutpat erat. Quisque erat eros, viverra eget, congue eget, semper rutrum, nulla. Nunc purus. Phasellus in felis.', '67.43.62.67/19', 'Hamish Bayne', '12/30/2019', 'Kobarid');
insert into interview (person_id, transcript, case_id, witness_name, date, city) values ('10096-5219', 'Sed vel enim sit amet nunc viverra dapibus. Nulla suscipit ligula in lacus. Curabitur at ipsum ac tellus semper interdum.', '176.192.33.211/19', 'Jocelyne Doxey', '11/24/2020', 'Tabalong');
insert into interview (person_id, transcript, case_id, witness_name, date, city) values ('13734-136', 'Fusce posuere felis sed lacus. Morbi sem mauris, laoreet ut, rhoncus aliquet, pulvinar sed, nisl. Nunc rhoncus dui vel sem. Sed sagittis. Nam congue, risus semper porta volutpat, quam pede lobortis ligula, sit amet eleifend pede libero quis orci.', '121.151.204.82/23', 'Deane Peile', '3/3/2020', 'Cama Juan');
insert into interview (person_id, transcript, case_id, witness_name, date, city) values ('50474-001', 'Morbi quis tortor id nulla ultrices aliquet. Maecenas leo odio, condimentum id, luctus nec, molestie sed, justo.', '149.202.159.62/12', 'Ofilia Everingham', '8/23/2020', 'Nangxian');
insert into interview (person_id, transcript, case_id, witness_name, date, city) values ('22700-098', 'Aenean fermentum. Donec ut mauris eget massa tempor convallis.', '191.168.12.100/8', 'Kiele Quilligan', '5/12/2020', 'Bình Minh');
insert into interview (person_id, transcript, case_id, witness_name, date, city) values ('41167-7773', 'Donec ut dolor. Morbi vel lectus in quam fringilla rhoncus. Mauris enim leo, rhoncus sed, vestibulum sit amet, cursus id, turpis. Integer aliquet, massa id lobortis convallis, tortor risus dapibus augue, vel accumsan tellus nisi eu orci. Mauris lacinia sapien quis libero. Nullam sit amet turpis elementum ligula vehicula consequat. Morbi a ipsum.', '25.176.188.179/30', 'Rebecca Hambribe', '4/26/2020', 'Páchni');
insert into interview (person_id, transcript, case_id, witness_name, date, city) values ('49527-731', 'Etiam justo. Etiam pretium iaculis justo. In hac habitasse platea dictumst. Etiam faucibus cursus urna. Ut tellus. Nulla ut erat id mauris vulputate elementum. Nullam varius. Nulla facilisi. Cras non velit nec nisi vulputate nonummy.', '234.100.113.177/18', 'Alexis Freyne', '8/7/2020', 'Diaowei');
insert into interview (person_id, transcript, case_id, witness_name, date, city) values ('0703-2859', 'Nunc rhoncus dui vel sem. Sed sagittis. Nam congue, risus semper porta volutpat, quam pede lobortis ligula, sit amet eleifend pede libero quis orci. Nullam molestie nibh in lectus.', '2.150.77.236/14', 'Gallagher Wrightson', '10/11/2020', 'Horqueta');
insert into interview (person_id, transcript, case_id, witness_name, date, city) values ('51367-015', 'Aenean sit amet justo. Morbi ut odio. Cras mi pede, malesuada in, imperdiet et, commodo vulputate, justo. In blandit ultrices enim. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Proin interdum mauris non ligula pellentesque ultrices. Phasellus id sapien in sapien iaculis congue. Vivamus metus arcu, adipiscing molestie, hendrerit at, vulputate vitae, nisl.', '64.240.93.211/26', 'Orelie Korneluk', '9/28/2020', 'Ngilengan');
insert into interview (person_id, transcript, case_id, witness_name, date, city) values ('55319-600', 'Phasellus in felis. Donec semper sapien a libero. Nam dui. Proin leo odio, porttitor id, consequat in, consequat ut, nulla.', '46.208.70.247/26', 'Winston Southall', '4/10/2020', 'Dingbu');
insert into interview (person_id, transcript, case_id, witness_name, date, city) values ('55289-794', 'Suspendisse potenti. Nullam porttitor lacus at turpis. Donec posuere metus vitae ipsum. Aliquam non mauris. Morbi non lectus.', '25.18.221.138/6', 'Amye Colbert', '12/5/2020', 'Yangxiang');
";

$stmt = db()->exec($query);
