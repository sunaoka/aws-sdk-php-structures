<?php

namespace Sunaoka\Aws\Structures\Iot\ListDomainConfigurations;

trait ListDomainConfigurationsTrait
{
    /**
     * @param ListDomainConfigurationsRequest $args
     * @return ListDomainConfigurationsResponse
     */
    public function listDomainConfigurations(ListDomainConfigurationsRequest $args)
    {
        $result = parent::listDomainConfigurations($args->toArray());
        return new ListDomainConfigurationsResponse($result->toArray());
    }
}
