<?php

namespace Sunaoka\Aws\Structures\Ec2\AssignPrivateIpAddresses\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PrivateIpAddress
 */
class AssignedPrivateIpAddress extends Shape
{
    /**
     * @param array{PrivateIpAddress?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
