<?php

namespace Sunaoka\Aws\Structures\Ec2\ProvisionPublicIpv4PoolCidr\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $FirstAddress
 * @property string|null $LastAddress
 * @property int|null $AddressCount
 * @property int|null $AvailableAddressCount
 */
class PublicIpv4PoolRange extends Shape
{
    /**
     * @param array{
     *     FirstAddress?: string|null,
     *     LastAddress?: string|null,
     *     AddressCount?: int|null,
     *     AvailableAddressCount?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
