<?php

namespace Sunaoka\Aws\Structures\SSMQuickSetup\UpdateConfigurationManager;

trait UpdateConfigurationManagerTrait
{
    /**
     * @param UpdateConfigurationManagerRequest $args
     * @return void
     */
    public function updateConfigurationManager(UpdateConfigurationManagerRequest $args)
    {
        parent::updateConfigurationManager($args->toArray());
    }
}
