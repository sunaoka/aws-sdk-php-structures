<?php

namespace Sunaoka\Aws\Structures\Ec2\RequestSpotFleet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $EnaSrdEnabled
 * @property EnaSrdUdpSpecificationRequest|null $EnaSrdUdpSpecification
 */
class EnaSrdSpecificationRequest extends Shape
{
    /**
     * @param array{
     *     EnaSrdEnabled?: bool|null,
     *     EnaSrdUdpSpecification?: EnaSrdUdpSpecificationRequest|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
