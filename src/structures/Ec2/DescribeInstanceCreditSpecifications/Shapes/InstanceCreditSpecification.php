<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeInstanceCreditSpecifications\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $InstanceId
 * @property string $CpuCredits
 */
class InstanceCreditSpecification extends Shape
{
    /**
     * @param array{
     *     InstanceId?: string,
     *     CpuCredits?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
