<?php

namespace Sunaoka\Aws\Structures\AppConfig\ValidateConfiguration;

trait ValidateConfigurationTrait
{
    /**
     * @param ValidateConfigurationRequest $args
     * @return void
     */
    public function validateConfiguration(ValidateConfigurationRequest $args)
    {
        parent::validateConfiguration($args->toArray());
    }
}
