<?php

namespace Sunaoka\Aws\Structures\NetworkFlowMonitor\UpdateMonitor\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AWS::EC2::VPC'|'AWS::AvailabilityZone'|'AWS::EC2::Subnet'|'AWS::Region'|'AWS::EKS::Cluster' $type
 * @property string $identifier
 */
class MonitorLocalResource extends Shape
{
    /**
     * @param array{
     *     type: 'AWS::EC2::VPC'|'AWS::AvailabilityZone'|'AWS::EC2::Subnet'|'AWS::Region'|'AWS::EKS::Cluster',
     *     identifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
