<?php

namespace Sunaoka\Aws\Structures\Ec2\RequestSpotFleet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $Primary
 * @property string $PrivateIpAddress
 */
class PrivateIpAddressSpecification extends Shape
{
    /**
     * @param array{
     *     Primary?: bool,
     *     PrivateIpAddress?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
