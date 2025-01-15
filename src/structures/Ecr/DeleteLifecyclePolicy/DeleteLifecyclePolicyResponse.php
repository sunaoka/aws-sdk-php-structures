<?php

namespace Sunaoka\Aws\Structures\Ecr\DeleteLifecyclePolicy;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $registryId
 * @property string|null $repositoryName
 * @property string|null $lifecyclePolicyText
 * @property \Aws\Api\DateTimeResult|null $lastEvaluatedAt
 */
class DeleteLifecyclePolicyResponse extends Response
{
}
