<?php

namespace Sunaoka\Aws\Structures\NetworkFlowMonitor\GetMonitor\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AWS::EC2::VPC'|'AWS::AvailabilityZone'|'AWS::EC2::Subnet' $type
 * @property string $identifier
 */
class MonitorLocalResource extends Shape
{
    /**
     * @param array{
     *     type: 'AWS::EC2::VPC'|'AWS::AvailabilityZone'|'AWS::EC2::Subnet',
     *     identifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
