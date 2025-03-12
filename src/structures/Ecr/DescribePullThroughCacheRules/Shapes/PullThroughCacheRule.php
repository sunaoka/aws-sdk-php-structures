<?php

namespace Sunaoka\Aws\Structures\Ecr\DescribePullThroughCacheRules\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ecrRepositoryPrefix
 * @property string|null $upstreamRegistryUrl
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property string|null $registryId
 * @property string|null $credentialArn
 * @property string|null $customRoleArn
 * @property string|null $upstreamRepositoryPrefix
 * @property 'ecr'|'ecr-public'|'quay'|'k8s'|'docker-hub'|'github-container-registry'|'azure-container-registry'|'gitlab-container-registry'|null $upstreamRegistry
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 */
class PullThroughCacheRule extends Shape
{
    /**
     * @param array{
     *     ecrRepositoryPrefix?: string|null,
     *     upstreamRegistryUrl?: string|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     registryId?: string|null,
     *     credentialArn?: string|null,
     *     customRoleArn?: string|null,
     *     upstreamRepositoryPrefix?: string|null,
     *     upstreamRegistry?: 'ecr'|'ecr-public'|'quay'|'k8s'|'docker-hub'|'github-container-registry'|'azure-container-registry'|'gitlab-container-registry'|null,
     *     updatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
