<?php

namespace Sunaoka\Aws\Structures\ElastiCache\ModifyCacheSubnetGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CacheSubnetGroupName
 * @property string|null $CacheSubnetGroupDescription
 * @property string|null $VpcId
 * @property list<Subnet>|null $Subnets
 * @property string|null $ARN
 * @property list<'ipv4'|'ipv6'|'dual_stack'>|null $SupportedNetworkTypes
 */
class CacheSubnetGroup extends Shape
{
    /**
     * @param array{
     *     CacheSubnetGroupName?: string|null,
     *     CacheSubnetGroupDescription?: string|null,
     *     VpcId?: string|null,
     *     Subnets?: list<Subnet>|null,
     *     ARN?: string|null,
     *     SupportedNetworkTypes?: list<'ipv4'|'ipv6'|'dual_stack'>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
