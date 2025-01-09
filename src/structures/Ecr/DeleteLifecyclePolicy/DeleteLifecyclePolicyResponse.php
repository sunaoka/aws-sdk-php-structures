<?php

namespace Sunaoka\Aws\Structures\Ecr\DeleteLifecyclePolicy;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $registryId
 * @property string $repositoryName
 * @property string $lifecyclePolicyText
 * @property \Aws\Api\DateTimeResult $lastEvaluatedAt
 */
class DeleteLifecyclePolicyResponse extends Response
{
}
