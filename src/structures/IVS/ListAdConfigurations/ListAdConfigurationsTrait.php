<?php

namespace Sunaoka\Aws\Structures\IVS\ListAdConfigurations;

trait ListAdConfigurationsTrait
{
    /**
     * @param ListAdConfigurationsRequest $args
     * @return ListAdConfigurationsResponse
     */
    public function listAdConfigurations(ListAdConfigurationsRequest $args)
    {
        $result = parent::listAdConfigurations($args->toArray());
        return new ListAdConfigurationsResponse($result->toArray());
    }
}
