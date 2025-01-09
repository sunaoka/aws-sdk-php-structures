<?php

namespace Sunaoka\Aws\Structures\Ecr\DescribePullThroughCacheRules\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ecrRepositoryPrefix
 * @property string $upstreamRegistryUrl
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $registryId
 * @property string $credentialArn
 * @property 'ecr-public'|'quay'|'k8s'|'docker-hub'|'github-container-registry'|'azure-container-registry'|'gitlab-container-registry' $upstreamRegistry
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class PullThroughCacheRule extends Shape
{
    /**
     * @param array{
     *     ecrRepositoryPrefix?: string,
     *     upstreamRegistryUrl?: string,
     *     createdAt?: \Aws\Api\DateTimeResult,
     *     registryId?: string,
     *     credentialArn?: string,
     *     upstreamRegistry?: 'ecr-public'|'quay'|'k8s'|'docker-hub'|'github-container-registry'|'azure-container-registry'|'gitlab-container-registry',
     *     updatedAt?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
