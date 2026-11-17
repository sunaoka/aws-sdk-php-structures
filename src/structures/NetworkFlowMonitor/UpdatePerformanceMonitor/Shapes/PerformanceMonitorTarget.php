<?php

namespace Sunaoka\Aws\Structures\NetworkFlowMonitor\UpdatePerformanceMonitor\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AWS::EC2::VPC' $type
 * @property string $identifier
 */
class PerformanceMonitorTarget extends Shape
{
    /**
     * @param array{
     *     type: 'AWS::EC2::VPC',
     *     identifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
