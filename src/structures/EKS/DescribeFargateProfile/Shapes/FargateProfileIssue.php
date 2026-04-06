<?php

namespace Sunaoka\Aws\Structures\EKS\DescribeFargateProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PodExecutionRoleAlreadyInUse'|'AccessDenied'|'ClusterUnreachable'|'InternalFailure'|null $code
 * @property string|null $message
 * @property list<string>|null $resourceIds
 */
class FargateProfileIssue extends Shape
{
    /**
     * @param array{
     *     code?: 'PodExecutionRoleAlreadyInUse'|'AccessDenied'|'ClusterUnreachable'|'InternalFailure'|null,
     *     message?: string|null,
     *     resourceIds?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
