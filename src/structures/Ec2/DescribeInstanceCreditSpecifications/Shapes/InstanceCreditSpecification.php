<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeInstanceCreditSpecifications\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $InstanceId
 * @property string|null $CpuCredits
 */
class InstanceCreditSpecification extends Shape
{
    /**
     * @param array{
     *     InstanceId?: string|null,
     *     CpuCredits?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
