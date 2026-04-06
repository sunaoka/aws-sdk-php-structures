<?php

namespace Sunaoka\Aws\Structures\Ecr\PutSigningConfiguration;

trait PutSigningConfigurationTrait
{
    /**
     * @param PutSigningConfigurationRequest $args
     * @return PutSigningConfigurationResponse
     */
    public function putSigningConfiguration(PutSigningConfigurationRequest $args)
    {
        $result = parent::putSigningConfiguration($args->toArray());
        return new PutSigningConfigurationResponse($result->toArray());
    }
}
