<!DOCTYPE html>
<head>
</head>
<body>
    <h2>Страница пользователя Аня</h2>
    <?php
        $username ='Аня';
        $userAge ='25';
        $useremailadress ='<a href="filippova_22@mail.ru">filippova_22@mail.ru</a>';
        $userTown ='Севастополь';
        $Aboutme ='Инженер-технолог судоремонтник';
    ?>
    <table>
        <tr>
            <td>Имя</td>
            <td><?php echo $username ?></td>
        </tr>
        <tr>
            <td>Возраст</td>
            <td><?php echo $userAge ?></td>
        </tr>
            <td>Почта</td>
            <td><?php echo $useremailadress ?></td>
        </tr>
        <tr>
            <td>Город</td>
            <td><?php echo $userTown ?></td>
        </tr>
        <tr>
            <td>Немного о себе</td>
            <td><?php echo $Aboutme ?></td>
        </tr>
    </table>
</body>
</html>
