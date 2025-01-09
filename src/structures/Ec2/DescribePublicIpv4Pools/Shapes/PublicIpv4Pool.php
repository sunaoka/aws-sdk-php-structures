<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribePublicIpv4Pools\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PoolId
 * @property string $Description
 * @property list<PublicIpv4PoolRange> $PoolAddressRanges
 * @property int $TotalAddressCount
 * @property int $TotalAvailableAddressCount
 * @property string $NetworkBorderGroup
 * @property list<Tag> $Tags
 */
class PublicIpv4Pool extends Shape
{
    /**
     * @param array{
     *     PoolId?: string,
     *     Description?: string,
     *     PoolAddressRanges?: list<PublicIpv4PoolRange>,
     *     TotalAddressCount?: int,
     *     TotalAvailableAddressCount?: int,
     *     NetworkBorderGroup?: string,
     *     Tags?: list<Tag>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
