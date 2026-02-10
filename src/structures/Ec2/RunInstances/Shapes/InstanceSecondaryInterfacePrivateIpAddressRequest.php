<?php

namespace Sunaoka\Aws\Structures\Ec2\RunInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PrivateIpAddress
 */
class InstanceSecondaryInterfacePrivateIpAddressRequest extends Shape
{
    /**
     * @param array{PrivateIpAddress: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
