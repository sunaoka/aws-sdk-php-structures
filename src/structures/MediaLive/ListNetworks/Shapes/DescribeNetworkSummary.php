<?php

namespace Sunaoka\Aws\Structures\MediaLive\ListNetworks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property list<string> $AssociatedClusterIds
 * @property string $Id
 * @property list<IpPool> $IpPools
 * @property string $Name
 * @property list<Route> $Routes
 * @property 'CREATING'|'CREATE_FAILED'|'ACTIVE'|'DELETING'|'IDLE'|'IN_USE'|'UPDATING'|'DELETE_FAILED'|'DELETED' $State
 */
class DescribeNetworkSummary extends Shape
{
    /**
     * @param array{
     *     Arn?: string,
     *     AssociatedClusterIds?: list<string>,
     *     Id?: string,
     *     IpPools?: list<IpPool>,
     *     Name?: string,
     *     Routes?: list<Route>,
     *     State?: 'CREATING'|'CREATE_FAILED'|'ACTIVE'|'DELETING'|'IDLE'|'IN_USE'|'UPDATING'|'DELETE_FAILED'|'DELETED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
