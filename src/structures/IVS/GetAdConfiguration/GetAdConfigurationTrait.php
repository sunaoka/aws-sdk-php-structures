<?php

namespace Sunaoka\Aws\Structures\IVS\GetAdConfiguration;

trait GetAdConfigurationTrait
{
    /**
     * @param GetAdConfigurationRequest $args
     * @return GetAdConfigurationResponse
     */
    public function getAdConfiguration(GetAdConfigurationRequest $args)
    {
        $result = parent::getAdConfiguration($args->toArray());
        return new GetAdConfigurationResponse($result->toArray());
    }
}
