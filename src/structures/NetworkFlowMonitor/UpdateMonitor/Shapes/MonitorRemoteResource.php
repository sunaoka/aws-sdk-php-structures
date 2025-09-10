<?php

namespace Sunaoka\Aws\Structures\NetworkFlowMonitor\UpdateMonitor\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AWS::EC2::VPC'|'AWS::AvailabilityZone'|'AWS::EC2::Subnet'|'AWS::AWSService'|'AWS::Region' $type
 * @property string $identifier
 */
class MonitorRemoteResource extends Shape
{
    /**
     * @param array{
     *     type: 'AWS::EC2::VPC'|'AWS::AvailabilityZone'|'AWS::EC2::Subnet'|'AWS::AWSService'|'AWS::Region',
     *     identifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
