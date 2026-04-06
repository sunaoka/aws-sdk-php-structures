<?php

namespace Sunaoka\Aws\Structures\Ecr\ValidatePullThroughCacheRule;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $ecrRepositoryPrefix
 * @property string|null $registryId
 * @property string|null $upstreamRegistryUrl
 * @property string|null $credentialArn
 * @property string|null $customRoleArn
 * @property string|null $upstreamRepositoryPrefix
 * @property bool|null $isValid
 * @property string|null $failure
 */
class ValidatePullThroughCacheRuleResponse extends Response
{
}
