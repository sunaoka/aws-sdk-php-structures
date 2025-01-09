<?php

namespace Sunaoka\Aws\Structures\Ec2\AttachNetworkInterface\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $EnaSrdUdpEnabled
 */
class EnaSrdUdpSpecification extends Shape
{
    /**
     * @param array{EnaSrdUdpEnabled?: bool} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
