<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeApplicationStatusChecks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SubnetId
 * @property string|null $SecurityGroupId
 */
class HealthCheckPathSourceResponseObject extends Shape
{
    /**
     * @param array{
     *     SubnetId?: string|null,
     *     SecurityGroupId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
