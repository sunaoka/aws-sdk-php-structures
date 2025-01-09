<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeInstanceTypes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $MaximumEfaInterfaces
 */
class EfaInfo extends Shape
{
    /**
     * @param array{MaximumEfaInterfaces?: int} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
