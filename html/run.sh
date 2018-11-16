
echo "TECHIO> redirect-streams 'Output'"
php "header.php" $1 $2 > "output.html"


# cat $1".html"
#ls ../target -al
#ls ../workspace -al

php Test.php $2 $3
echo "TECHIO> open -s /project/target/ output.html"
