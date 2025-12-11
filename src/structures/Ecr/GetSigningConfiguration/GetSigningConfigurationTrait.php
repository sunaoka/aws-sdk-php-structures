<?php

namespace Sunaoka\Aws\Structures\Ecr\GetSigningConfiguration;

trait GetSigningConfigurationTrait
{
    /**
     * @param GetSigningConfigurationRequest $args
     * @return GetSigningConfigurationResponse
     */
    public function getSigningConfiguration(GetSigningConfigurationRequest $args)
    {
        $result = parent::getSigningConfiguration($args->toArray());
        return new GetSigningConfigurationResponse($result->toArray());
    }
}
