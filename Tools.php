bi='\033[34;1m' #biru
i='\033[32;1m' #ijo
pur='\033[35;1m' #purple
cy='\033[36;1m' #cyan
me='\033[31;1m' #merah
pu='\033[37;1m' #putih
ku='\033[33;1m' #kuning

figlet -f smslant "CHOKY"


echo " $ku
        +=========================================+
        |..........   Tools Berguna    ...........|
        +-----------------------------------------+
        |            #Author: Choky               |
        |              Version 0.9                |
        |            Wa:0822899768**              |
        +=========================================+
        |..........  Tools Berguna   .............|
        +-----------------------------------------+"
sleep 1
echo $i "+==========================+"
echo $ku "[1] Dark Fb 1.7"
echo $ku "[2] Spamsms"
echo $ku "[3] Hack wifi"
echo $ku "[4] Lacak IP"
echo $ku "[5] Ddos"
echo $ku "[6] install sungai linux"
echo $ku "[7] Coming Soon"
echo $ku "[8] coming soon"
echo $ku "[00] EXIT"
echo $i  "+==========================+"

echo "[+] pilih nomor : "
read nomor

if  [ $nomor  = 1 ] || [ $nomor]
then
clear
sleep 2
echo $me "Tunggu Sebentar Sayang"
pkg install python2
pkg install git
git clone https://github.com/rezadkim/dark-fb     cd dark-fb
pip2 install requests
pip2 install mechanize
python2 dark.py
fi

if [ $nomor = 2 ] || [ $nomor]
then
clear
sleep 2
echo $ku "Tunggu Sebentar Sayang"
pkg install git
git clone https://github.com/Kizukaa/SpammerSMS
cd SpammerSMS
fi

if [ $nomor = 3 ] || [ $nomor]
then
clear
sleep 2
echo $bi "Tunggu Sebentar Sayang"
git clone https://github.com/esc0rtd3w/wifi-hacker
cd wifi-hacker
chmod +x wifi-hacker.sh
./wifi-hacker.sh
fi

if [ $nomo = 4 ] || [ $nomor]
then
clear
sleep 1
echo $pur "Tunggu Sebentar Sayang"
git clone https://github.com/maldevel/IPGeoLocation
 Is
 cd IPGeoLocation
 is
 chmod +x ipgeolocation.py
 Is
 pip install -r repuirements.txt
 python ipgeolocation.py -m
 python ipgeolocation.py -h
 python ipgeolocation.py -t 10.99.110.220
fi

if [ $nomor = 5 ] || [ $nomor]
then
clear
echo $i "Tunggu Sebentar Sayang"
apt install git
pkg install python2
 git clone https://github.com/mrhidden13/DDoSAttacks.git
 ls
 cd DDoSAttacks
 ls
 python2 DDoS.py
fi

if [ $nomor = 6 ] || [ $nomor]
then
clear
echo $pur "Tunggu Sebentar Sayang"
git clone https://github.com/LionSec/katoolin
ls
cd katoolin
ls
python2 katoolin.py
fi

if [ $nomor = 7 ] || [ $nomor]
then
clear
echo $ku "Tunggu Sebentar Sayang"
echo $bi "COMMING SOON"
fi

if [ $nomor = 8  ] || [ $nomor = 08]
then
clear
echo $ku "Tunggu Sebentar Sayang"
echo $bi "COMMING SOON"
fi

if [ $nomor = 00 ] || [ $nomor = 00]
then
clear
echo $pur "KELUAR"
fi