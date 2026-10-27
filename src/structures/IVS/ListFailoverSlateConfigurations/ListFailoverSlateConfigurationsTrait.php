<?php

namespace Sunaoka\Aws\Structures\IVS\ListFailoverSlateConfigurations;

trait ListFailoverSlateConfigurationsTrait
{
    /**
     * @param ListFailoverSlateConfigurationsRequest $args
     * @return ListFailoverSlateConfigurationsResponse
     */
    public function listFailoverSlateConfigurations(ListFailoverSlateConfigurationsRequest $args)
    {
        $result = parent::listFailoverSlateConfigurations($args->toArray());
        return new ListFailoverSlateConfigurationsResponse($result->toArray());
    }
}
