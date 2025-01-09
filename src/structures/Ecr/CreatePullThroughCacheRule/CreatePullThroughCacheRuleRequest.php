<?php

namespace Sunaoka\Aws\Structures\Ecr\CreatePullThroughCacheRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ecrRepositoryPrefix
 * @property string $upstreamRegistryUrl
 * @property string $registryId
 * @property 'ecr-public'|'quay'|'k8s'|'docker-hub'|'github-container-registry'|'azure-container-registry'|'gitlab-container-registry' $upstreamRegistry
 * @property string $credentialArn
 */
class CreatePullThroughCacheRuleRequest extends Request
{
    /**
     * @param array{
     *     ecrRepositoryPrefix: string,
     *     upstreamRegistryUrl: string,
     *     registryId?: string,
     *     upstreamRegistry?: 'ecr-public'|'quay'|'k8s'|'docker-hub'|'github-container-registry'|'azure-container-registry'|'gitlab-container-registry',
     *     credentialArn?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
