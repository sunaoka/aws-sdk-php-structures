<?php

namespace Sunaoka\Aws\Structures\AppRunner\ListServices\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ServiceName
 * @property string $ServiceId
 * @property string $ServiceArn
 * @property string $ServiceUrl
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property \Aws\Api\DateTimeResult $UpdatedAt
 * @property 'CREATE_FAILED'|'RUNNING'|'DELETED'|'DELETE_FAILED'|'PAUSED'|'OPERATION_IN_PROGRESS' $Status
 */
class ServiceSummary extends Shape
{
    /**
     * @param array{
     *     ServiceName?: string,
     *     ServiceId?: string,
     *     ServiceArn?: string,
     *     ServiceUrl?: string,
     *     CreatedAt?: \Aws\Api\DateTimeResult,
     *     UpdatedAt?: \Aws\Api\DateTimeResult,
     *     Status?: 'CREATE_FAILED'|'RUNNING'|'DELETED'|'DELETE_FAILED'|'PAUSED'|'OPERATION_IN_PROGRESS'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
