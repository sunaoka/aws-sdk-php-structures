<?php

namespace Sunaoka\Aws\Structures\IVS\CreateFailoverSlateConfiguration;

trait CreateFailoverSlateConfigurationTrait
{
    /**
     * @param CreateFailoverSlateConfigurationRequest $args
     * @return CreateFailoverSlateConfigurationResponse
     */
    public function createFailoverSlateConfiguration(CreateFailoverSlateConfigurationRequest $args)
    {
        $result = parent::createFailoverSlateConfiguration($args->toArray());
        return new CreateFailoverSlateConfigurationResponse($result->toArray());
    }
}
