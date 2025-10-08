<?php

namespace Sunaoka\Aws\Structures\Emr\GetBlockPublicAccessConfiguration;

trait GetBlockPublicAccessConfigurationTrait
{
    /**
     * @param GetBlockPublicAccessConfigurationRequest $args
     * @return GetBlockPublicAccessConfigurationResponse
     */
    public function getBlockPublicAccessConfiguration(GetBlockPublicAccessConfigurationRequest $args)
    {
        $result = parent::getBlockPublicAccessConfiguration($args->toArray());
        return new GetBlockPublicAccessConfigurationResponse($result->toArray());
    }
}
