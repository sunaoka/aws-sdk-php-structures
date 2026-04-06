<?php

namespace Sunaoka\Aws\Structures\SSMQuickSetup\UpdateConfigurationDefinition;

trait UpdateConfigurationDefinitionTrait
{
    /**
     * @param UpdateConfigurationDefinitionRequest $args
     * @return void
     */
    public function updateConfigurationDefinition(UpdateConfigurationDefinitionRequest $args)
    {
        parent::updateConfigurationDefinition($args->toArray());
    }
}
