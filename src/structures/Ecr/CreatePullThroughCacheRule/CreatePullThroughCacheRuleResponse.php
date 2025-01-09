<?php

namespace Sunaoka\Aws\Structures\Ecr\CreatePullThroughCacheRule;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ecrRepositoryPrefix
 * @property string $upstreamRegistryUrl
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $registryId
 * @property 'ecr-public'|'quay'|'k8s'|'docker-hub'|'github-container-registry'|'azure-container-registry'|'gitlab-container-registry' $upstreamRegistry
 * @property string $credentialArn
 */
class CreatePullThroughCacheRuleResponse extends Response
{
}
