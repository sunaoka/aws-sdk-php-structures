<?php

namespace Sunaoka\Aws\Structures\Ecs\DescribeServiceRevisions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $arn
 * @property 'PROVISIONING'|'ACTIVE'|'DEPROVISIONING'|'DELETED'|'FAILED' $status
 * @property string|null $statusReason
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property string $healthCheckPath
 * @property int $healthCheckPort
 * @property int $port
 */
class ManagedTargetGroup extends Shape
{
    /**
     * @param array{
     *     arn?: string|null,
     *     status: 'PROVISIONING'|'ACTIVE'|'DEPROVISIONING'|'DELETED'|'FAILED',
     *     statusReason?: string|null,
     *     updatedAt: \Aws\Api\DateTimeResult,
     *     healthCheckPath: string,
     *     healthCheckPort: int,
     *     port: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
