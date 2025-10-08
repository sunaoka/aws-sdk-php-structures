<?php

namespace Sunaoka\Aws\Structures\Emr\PutBlockPublicAccessConfiguration;

trait PutBlockPublicAccessConfigurationTrait
{
    /**
     * @param PutBlockPublicAccessConfigurationRequest $args
     * @return PutBlockPublicAccessConfigurationResponse
     */
    public function putBlockPublicAccessConfiguration(PutBlockPublicAccessConfigurationRequest $args)
    {
        $result = parent::putBlockPublicAccessConfiguration($args->toArray());
        return new PutBlockPublicAccessConfigurationResponse($result->toArray());
    }
}
