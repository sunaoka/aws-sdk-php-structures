<?php

namespace Sunaoka\Aws\Structures\Ecs\ListGateways\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $gatewayArn
 * @property string|null $name
 * @property 'ACTIVE'|'UPDATE_IN_PROGRESS'|'UPDATE_COMPLETE'|'UPDATE_FAILED'|'DELETED'|null $status
 * @property \Aws\Api\DateTimeResult|null $createdAt
 */
class GatewaySummary extends Shape
{
    /**
     * @param array{
     *     gatewayArn?: string|null,
     *     name?: string|null,
     *     status?: 'ACTIVE'|'UPDATE_IN_PROGRESS'|'UPDATE_COMPLETE'|'UPDATE_FAILED'|'DELETED'|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
