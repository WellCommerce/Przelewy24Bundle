<?php

namespace WellCommerce\Bundle\Przelewy24Bundle\Composer;

use Composer\Script\CommandEvent;

/**
 * Class Installer
 *
 * @author  Adam Piotrowski <adam@wellcommerce.org>
 */
class ScriptHandler extends \Sensio\Bundle\DistributionBundle\Composer\ScriptHandler
{
    /**
     * Call the demo command of the Acme Demo Bundle.
     *
     * @param $event CommandEvent A instance
     */
    public static function registerBundle(CommandEvent $event)
    {
        $options    = self::getOptions($event);
        $consoleDir = self::getConsoleDir($event, 'install Przelewy24');
        
        if (null === $consoleDir) {
            return;
        }
        
        static::executeCommand($event, $consoleDir, 'wellcommerce:bundle:register --prefix Przelewy24', $options['process-timeout']);
    }
    
}
