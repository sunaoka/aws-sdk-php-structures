<?php

namespace Sunaoka\Aws\Structures\kendra\ListAccessControlConfigurations;

trait ListAccessControlConfigurationsTrait
{
    /**
     * @param ListAccessControlConfigurationsRequest $args
     * @return ListAccessControlConfigurationsResponse
     */
    public function listAccessControlConfigurations(ListAccessControlConfigurationsRequest $args)
    {
        $result = parent::listAccessControlConfigurations($args->toArray());
        return new ListAccessControlConfigurationsResponse($result->toArray());
    }
}
