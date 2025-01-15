<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeSpotFleetRequests\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $Primary
 * @property string|null $PrivateIpAddress
 */
class PrivateIpAddressSpecification extends Shape
{
    /**
     * @param array{
     *     Primary?: bool|null,
     *     PrivateIpAddress?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
