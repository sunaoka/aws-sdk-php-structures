<?php

namespace Sunaoka\Aws\Structures\ElastiCache\DescribeCacheSubnetGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CacheSubnetGroupName
 * @property string $CacheSubnetGroupDescription
 * @property string $VpcId
 * @property list<Subnet> $Subnets
 * @property string $ARN
 * @property list<'ipv4'|'ipv6'|'dual_stack'> $SupportedNetworkTypes
 */
class CacheSubnetGroup extends Shape
{
    /**
     * @param array{
     *     CacheSubnetGroupName?: string,
     *     CacheSubnetGroupDescription?: string,
     *     VpcId?: string,
     *     Subnets?: list<Subnet>,
     *     ARN?: string,
     *     SupportedNetworkTypes?: list<'ipv4'|'ipv6'|'dual_stack'>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
