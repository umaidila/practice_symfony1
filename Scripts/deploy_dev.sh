git checkout -b dev
git commit -a -m "dev deploy"
git push origin dev
ssh root@91.203.192.213 'cd /var/www/html/project_dev/Scripts/build.sh'