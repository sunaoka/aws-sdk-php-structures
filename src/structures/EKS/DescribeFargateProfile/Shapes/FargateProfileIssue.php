<?php

namespace Sunaoka\Aws\Structures\EKS\DescribeFargateProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PodExecutionRoleAlreadyInUse'|'AccessDenied'|'ClusterUnreachable'|'InternalFailure' $code
 * @property string $message
 * @property list<string> $resourceIds
 */
class FargateProfileIssue extends Shape
{
    /**
     * @param array{
     *     code?: 'PodExecutionRoleAlreadyInUse'|'AccessDenied'|'ClusterUnreachable'|'InternalFailure',
     *     message?: string,
     *     resourceIds?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
