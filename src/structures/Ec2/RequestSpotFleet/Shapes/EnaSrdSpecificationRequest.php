<?php

namespace Sunaoka\Aws\Structures\Ec2\RequestSpotFleet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $EnaSrdEnabled
 * @property EnaSrdUdpSpecificationRequest $EnaSrdUdpSpecification
 */
class EnaSrdSpecificationRequest extends Shape
{
    /**
     * @param array{
     *     EnaSrdEnabled?: bool,
     *     EnaSrdUdpSpecification?: EnaSrdUdpSpecificationRequest
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
