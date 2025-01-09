<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeVpcPeeringConnections\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'initiating-request'|'pending-acceptance'|'active'|'deleted'|'rejected'|'failed'|'expired'|'provisioning'|'deleting' $Code
 * @property string $Message
 */
class VpcPeeringConnectionStateReason extends Shape
{
    /**
     * @param array{
     *     Code?: 'initiating-request'|'pending-acceptance'|'active'|'deleted'|'rejected'|'failed'|'expired'|'provisioning'|'deleting',
     *     Message?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
