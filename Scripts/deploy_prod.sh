git checkout -b prod
git commit -m "prod deploy"
git push
ssh root@91.203.192.213 'cd /var/www/html/project_prod/scripts/build.sh'
