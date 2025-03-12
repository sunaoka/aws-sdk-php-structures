<?php

namespace Sunaoka\Aws\Structures\Ecr\CreatePullThroughCacheRule;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $ecrRepositoryPrefix
 * @property string|null $upstreamRegistryUrl
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property string|null $registryId
 * @property 'ecr'|'ecr-public'|'quay'|'k8s'|'docker-hub'|'github-container-registry'|'azure-container-registry'|'gitlab-container-registry'|null $upstreamRegistry
 * @property string|null $credentialArn
 * @property string|null $customRoleArn
 * @property string|null $upstreamRepositoryPrefix
 */
class CreatePullThroughCacheRuleResponse extends Response
{
}
