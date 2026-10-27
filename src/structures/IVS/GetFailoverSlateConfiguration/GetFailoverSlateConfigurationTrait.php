<?php

namespace Sunaoka\Aws\Structures\IVS\GetFailoverSlateConfiguration;

trait GetFailoverSlateConfigurationTrait
{
    /**
     * @param GetFailoverSlateConfigurationRequest $args
     * @return GetFailoverSlateConfigurationResponse
     */
    public function getFailoverSlateConfiguration(GetFailoverSlateConfigurationRequest $args)
    {
        $result = parent::getFailoverSlateConfiguration($args->toArray());
        return new GetFailoverSlateConfigurationResponse($result->toArray());
    }
}
