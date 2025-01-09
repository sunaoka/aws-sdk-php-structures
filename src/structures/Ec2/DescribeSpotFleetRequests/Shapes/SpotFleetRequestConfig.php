<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeSpotFleetRequests\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'error'|'pending_fulfillment'|'pending_termination'|'fulfilled' $ActivityStatus
 * @property \Aws\Api\DateTimeResult $CreateTime
 * @property SpotFleetRequestConfigData $SpotFleetRequestConfig
 * @property string $SpotFleetRequestId
 * @property 'submitted'|'active'|'cancelled'|'failed'|'cancelled_running'|'cancelled_terminating'|'modifying' $SpotFleetRequestState
 * @property list<Tag> $Tags
 */
class SpotFleetRequestConfig extends Shape
{
    /**
     * @param array{
     *     ActivityStatus?: 'error'|'pending_fulfillment'|'pending_termination'|'fulfilled',
     *     CreateTime?: \Aws\Api\DateTimeResult,
     *     SpotFleetRequestConfig?: SpotFleetRequestConfigData,
     *     SpotFleetRequestId?: string,
     *     SpotFleetRequestState?: 'submitted'|'active'|'cancelled'|'failed'|'cancelled_running'|'cancelled_terminating'|'modifying',
     *     Tags?: list<Tag>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
