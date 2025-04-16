async function fetchPlayers() {
  try {
      const response = await fetch(`https://servers-frontend.fivem.net/api/servers/single/y73q9k`);
      const data = await response.json();
      
      console.log("API Response:", data);  // Ajout pour vérifier la réponse complète

      if (data && data.Data) {
          const playerCount = data.Data.clients;  // Utilisation de data.Data.clients pour le nombre de joueurs
          const maxPlayers = data.Data.sv_maxclients;  // Utilisation de data.Data.sv_maxclients pour le nombre max de joueurs

          console.log("Player Count:", playerCount);  // Ajout pour vérifier la valeur de playerCount
          console.log("Max Players:", maxPlayers);  // Ajout pour vérifier la valeur de maxPlayers

          const playersOnlineElement = document.getElementById('players-online-1');
          const progressBarElement = document.getElementById('progress-bar-1');

          if (playersOnlineElement && progressBarElement) {
              playersOnlineElement.textContent = `${playerCount}/${maxPlayers} Joueurs en ligne`;
              progressBarElement.style.width = `${(playerCount / maxPlayers) * 100}%`;
              progressBarElement.setAttribute('aria-valuenow', playerCount);
          } else {
              console.error('Élément HTML non trouvé');
          }
      } else {
          console.error('Aucune donnée de joueur trouvée');
      }
  } catch (error) {
      console.error('Erreur lors de la récupération des données du serveur:', error);
  }
}

// Récupère les données des joueurs au chargement de la page
document.addEventListener('DOMContentLoaded', fetchPlayers);

console.log("assets/js/check_server.js is loaded successfully!");
