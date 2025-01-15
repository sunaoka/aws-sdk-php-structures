<?php

namespace Sunaoka\Aws\Structures\MediaLive\ListNetworks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Arn
 * @property list<string>|null $AssociatedClusterIds
 * @property string|null $Id
 * @property list<IpPool>|null $IpPools
 * @property string|null $Name
 * @property list<Route>|null $Routes
 * @property 'CREATING'|'CREATE_FAILED'|'ACTIVE'|'DELETING'|'IDLE'|'IN_USE'|'UPDATING'|'DELETE_FAILED'|'DELETED'|null $State
 */
class DescribeNetworkSummary extends Shape
{
    /**
     * @param array{
     *     Arn?: string|null,
     *     AssociatedClusterIds?: list<string>|null,
     *     Id?: string|null,
     *     IpPools?: list<IpPool>|null,
     *     Name?: string|null,
     *     Routes?: list<Route>|null,
     *     State?: 'CREATING'|'CREATE_FAILED'|'ACTIVE'|'DELETING'|'IDLE'|'IN_USE'|'UPDATING'|'DELETE_FAILED'|'DELETED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
