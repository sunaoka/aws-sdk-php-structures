<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeInstanceTypes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $MaximumEfaInterfaces
 */
class EfaInfo extends Shape
{
    /**
     * @param array{MaximumEfaInterfaces?: int|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
