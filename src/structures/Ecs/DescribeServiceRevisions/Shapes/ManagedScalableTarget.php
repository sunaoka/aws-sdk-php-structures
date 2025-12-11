<?php

namespace Sunaoka\Aws\Structures\Ecs\DescribeServiceRevisions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $arn
 * @property 'PROVISIONING'|'ACTIVE'|'DEPROVISIONING'|'DELETED'|'FAILED' $status
 * @property string|null $statusReason
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property int $minCapacity
 * @property int $maxCapacity
 */
class ManagedScalableTarget extends Shape
{
    /**
     * @param array{
     *     arn?: string|null,
     *     status: 'PROVISIONING'|'ACTIVE'|'DEPROVISIONING'|'DELETED'|'FAILED',
     *     statusReason?: string|null,
     *     updatedAt: \Aws\Api\DateTimeResult,
     *     minCapacity: int,
     *     maxCapacity: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
