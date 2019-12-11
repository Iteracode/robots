<?php
namespace Iteracode\Robots\Shell;

use Cake\Console\Shell;

class RobotsShell extends Shell
{
    /**
     * Main function
     *
     * @return void
     */
    public function main()
    {
        $robotFileName = env('ROBOTSFILE', 'robots.prod.txt');

        if (!file_exists(CONFIG . $robotFileName)) {
            $this->abort('Fichier non trouvé : ' . (CONFIG . $robotFileName));
        }

        if (copy(CONFIG . $robotFileName, WWW_ROOT . 'robots.txt')) {
            $this->out("Génération du fichier robots.txt réussie.");
        } else {
            $this->error("Erreur lors de copie " . (CONFIG . $robotFileName) . " -> " . (WWW_ROOT . 'robots.txt'));
        }
    }
}
