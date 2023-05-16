# AdminPanel
Admin panel for server monitoring

Projet inspiré de https://github.com/Rauks/Minecraft-RCON

AdminPanel est un projet conçu pour fournir un accès web sécurisé à la console RCON d'un serveur Minecraft. Cet outil permet aux administrateurs de serveur de gérer et de contrôler leur environnement Minecraft de manière efficace et sécurisée depuis une instance docker, la console RCON offre une auto-complétion.

ce projet ne sera plus mise à jour et pourrait comporter des problèmes de sécurité à cause de l'arrêt de son maintien

## Setup:

mettre les variables d'environnement:

  RCON_HOST
  
  RCON_PORT
  
  RCON_PASSWORD
  
  USER
  
  PASS
  
## Utilisation Docker

```bash
sudo docker build -t adminpanel ./
sudo docker run -e RCON_HOST=xxx -e RCON_PORT=xxx -e RCON_PASSWORD=xxx -e USER=admin -e PASS=admin123 adminpanel
```
