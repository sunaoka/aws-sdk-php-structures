<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribePublicIpv4Pools\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $PoolId
 * @property string|null $Description
 * @property list<PublicIpv4PoolRange>|null $PoolAddressRanges
 * @property int|null $TotalAddressCount
 * @property int|null $TotalAvailableAddressCount
 * @property string|null $NetworkBorderGroup
 * @property list<Tag>|null $Tags
 */
class PublicIpv4Pool extends Shape
{
    /**
     * @param array{
     *     PoolId?: string|null,
     *     Description?: string|null,
     *     PoolAddressRanges?: list<PublicIpv4PoolRange>|null,
     *     TotalAddressCount?: int|null,
     *     TotalAvailableAddressCount?: int|null,
     *     NetworkBorderGroup?: string|null,
     *     Tags?: list<Tag>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
