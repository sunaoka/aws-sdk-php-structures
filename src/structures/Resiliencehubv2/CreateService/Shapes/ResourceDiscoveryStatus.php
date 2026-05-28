<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\CreateService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'RUNNING'|'SUCCEEDED'|'FAILED'|'COMPLETED_WITH_FAILURES'|'NOT_STARTED'|null $status
 * @property \Aws\Api\DateTimeResult|null $lastRunAt
 * @property 'INVALID_PERMISSIONS'|'STACK_NOT_FOUND'|'CLUSTER_NOT_FOUND'|'STATE_FILE_NOT_FOUND'|'ACCESS_DENIED'|'UNSUPPORTED_CLUSTER'|'INTERNAL_ERROR'|null $errorCode
 * @property string|null $errorMessage
 */
class ResourceDiscoveryStatus extends Shape
{
    /**
     * @param array{
     *     status?: 'RUNNING'|'SUCCEEDED'|'FAILED'|'COMPLETED_WITH_FAILURES'|'NOT_STARTED'|null,
     *     lastRunAt?: \Aws\Api\DateTimeResult|null,
     *     errorCode?: 'INVALID_PERMISSIONS'|'STACK_NOT_FOUND'|'CLUSTER_NOT_FOUND'|'STATE_FILE_NOT_FOUND'|'ACCESS_DENIED'|'UNSUPPORTED_CLUSTER'|'INTERNAL_ERROR'|null,
     *     errorMessage?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
