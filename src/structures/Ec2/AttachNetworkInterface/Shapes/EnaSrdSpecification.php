<?php

namespace Sunaoka\Aws\Structures\Ec2\AttachNetworkInterface\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $EnaSrdEnabled
 * @property EnaSrdUdpSpecification|null $EnaSrdUdpSpecification
 */
class EnaSrdSpecification extends Shape
{
    /**
     * @param array{
     *     EnaSrdEnabled?: bool|null,
     *     EnaSrdUdpSpecification?: EnaSrdUdpSpecification|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
