<?php

namespace Sunaoka\Aws\Structures\Ec2\AssignPrivateIpAddresses\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $PrivateIpAddress
 */
class AssignedPrivateIpAddress extends Shape
{
    /**
     * @param array{PrivateIpAddress?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
