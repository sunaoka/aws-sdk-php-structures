<?php

namespace Sunaoka\Aws\Structures\ResourceGroups\PutGroupConfiguration;

trait PutGroupConfigurationTrait
{
    /**
     * @param PutGroupConfigurationRequest $args
     * @return PutGroupConfigurationResponse
     */
    public function putGroupConfiguration(PutGroupConfigurationRequest $args)
    {
        $result = parent::putGroupConfiguration($args->toArray());
        return new PutGroupConfigurationResponse($result->toArray());
    }
}
