<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribePublicIpv4Pools\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FirstAddress
 * @property string $LastAddress
 * @property int $AddressCount
 * @property int $AvailableAddressCount
 */
class PublicIpv4PoolRange extends Shape
{
    /**
     * @param array{
     *     FirstAddress?: string,
     *     LastAddress?: string,
     *     AddressCount?: int,
     *     AvailableAddressCount?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
