<?php
namespace Concrete\Core\Application\Service\UserInterface\Help;

class Manager implements ManagerInterface
{

    public function getMessage($identifier)
    {
        switch($identifier) {
            case 'toolbar':
                $m = new Message();
                $m->setContent(t('Use the editing toolbar at the top of the page to put your page in edit mode, add content to the page, change page settings, and navigate your site.'));
                $m->setIdentifier('toolbar');
                $m->setGuideToLaunch('toolbar');
                break;
        }

        return (isset($m)) ? $m : null;
    }

}
