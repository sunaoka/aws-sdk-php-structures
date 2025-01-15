<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeSpotFleetRequests\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'error'|'pending_fulfillment'|'pending_termination'|'fulfilled'|null $ActivityStatus
 * @property \Aws\Api\DateTimeResult|null $CreateTime
 * @property SpotFleetRequestConfigData|null $SpotFleetRequestConfig
 * @property string|null $SpotFleetRequestId
 * @property 'submitted'|'active'|'cancelled'|'failed'|'cancelled_running'|'cancelled_terminating'|'modifying'|null $SpotFleetRequestState
 * @property list<Tag>|null $Tags
 */
class SpotFleetRequestConfig extends Shape
{
    /**
     * @param array{
     *     ActivityStatus?: 'error'|'pending_fulfillment'|'pending_termination'|'fulfilled'|null,
     *     CreateTime?: \Aws\Api\DateTimeResult|null,
     *     SpotFleetRequestConfig?: SpotFleetRequestConfigData|null,
     *     SpotFleetRequestId?: string|null,
     *     SpotFleetRequestState?: 'submitted'|'active'|'cancelled'|'failed'|'cancelled_running'|'cancelled_terminating'|'modifying'|null,
     *     Tags?: list<Tag>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
