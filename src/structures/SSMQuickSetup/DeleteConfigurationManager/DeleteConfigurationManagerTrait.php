<?php

namespace Sunaoka\Aws\Structures\SSMQuickSetup\DeleteConfigurationManager;

trait DeleteConfigurationManagerTrait
{
    /**
     * @param DeleteConfigurationManagerRequest $args
     * @return void
     */
    public function deleteConfigurationManager(DeleteConfigurationManagerRequest $args)
    {
        parent::deleteConfigurationManager($args->toArray());
    }
}
