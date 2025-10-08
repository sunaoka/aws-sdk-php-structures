<?php

namespace Sunaoka\Aws\Structures\SecretsManager\ReplicateSecretToRegions;

trait ReplicateSecretToRegionsTrait
{
    /**
     * @param ReplicateSecretToRegionsRequest $args
     * @return ReplicateSecretToRegionsResponse
     */
    public function replicateSecretToRegions(ReplicateSecretToRegionsRequest $args)
    {
        $result = parent::replicateSecretToRegions($args->toArray());
        return new ReplicateSecretToRegionsResponse($result->toArray());
    }
}
