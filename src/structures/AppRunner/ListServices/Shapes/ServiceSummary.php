<?php

namespace Sunaoka\Aws\Structures\AppRunner\ListServices\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ServiceName
 * @property string|null $ServiceId
 * @property string|null $ServiceArn
 * @property string|null $ServiceUrl
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property \Aws\Api\DateTimeResult|null $UpdatedAt
 * @property 'CREATE_FAILED'|'RUNNING'|'DELETED'|'DELETE_FAILED'|'PAUSED'|'OPERATION_IN_PROGRESS'|null $Status
 */
class ServiceSummary extends Shape
{
    /**
     * @param array{
     *     ServiceName?: string|null,
     *     ServiceId?: string|null,
     *     ServiceArn?: string|null,
     *     ServiceUrl?: string|null,
     *     CreatedAt?: \Aws\Api\DateTimeResult|null,
     *     UpdatedAt?: \Aws\Api\DateTimeResult|null,
     *     Status?: 'CREATE_FAILED'|'RUNNING'|'DELETED'|'DELETE_FAILED'|'PAUSED'|'OPERATION_IN_PROGRESS'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
