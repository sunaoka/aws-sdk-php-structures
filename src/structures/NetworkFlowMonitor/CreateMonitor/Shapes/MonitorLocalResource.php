<?php

namespace Sunaoka\Aws\Structures\NetworkFlowMonitor\CreateMonitor\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AWS::EC2::VPC'|'AWS::AvailabilityZone'|'AWS::EC2::Subnet'|'AWS::Region' $type
 * @property string $identifier
 */
class MonitorLocalResource extends Shape
{
    /**
     * @param array{
     *     type: 'AWS::EC2::VPC'|'AWS::AvailabilityZone'|'AWS::EC2::Subnet'|'AWS::Region',
     *     identifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
