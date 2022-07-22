<?php

passthru("wp core install --url=example.com --title=\"Test Site\" --admin_user=testadmin --admin_password=testpassword --admin_email=chris.porter@pantheon.io");

passthru("wp theme activate oceanwp");

passthru("wp plugin activate ocean-extra elementor ocean-social-sharing ocean-stick-anything wpforms-lite");

echo("checking filesystem for temp location: ");
if(!file_exists("../../../../files/private/temp.xml")) {
    echo("not found. creating file.\r\n");
    mkdir("../../../../../files/private");
    touch("../../../../../files/private/temp.xml");
}
else {
    echo("found! All set.\r\n");
}