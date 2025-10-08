<?php

namespace Sunaoka\Aws\Structures\ResourceGroups\GetGroupConfiguration;

trait GetGroupConfigurationTrait
{
    /**
     * @param GetGroupConfigurationRequest $args
     * @return GetGroupConfigurationResponse
     */
    public function getGroupConfiguration(GetGroupConfigurationRequest $args)
    {
        $result = parent::getGroupConfiguration($args->toArray());
        return new GetGroupConfigurationResponse($result->toArray());
    }
}
