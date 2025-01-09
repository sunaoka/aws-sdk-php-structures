<?php

namespace Sunaoka\Aws\Structures\Ec2\AttachNetworkInterface\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $EnaSrdEnabled
 * @property EnaSrdUdpSpecification $EnaSrdUdpSpecification
 */
class EnaSrdSpecification extends Shape
{
    /**
     * @param array{
     *     EnaSrdEnabled?: bool,
     *     EnaSrdUdpSpecification?: EnaSrdUdpSpecification
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
