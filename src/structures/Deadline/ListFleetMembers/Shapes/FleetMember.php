<?php

namespace Sunaoka\Aws\Structures\Deadline\ListFleetMembers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $farmId
 * @property string $fleetId
 * @property string $identityStoreId
 * @property 'VIEWER'|'CONTRIBUTOR'|'OWNER'|'MANAGER' $membershipLevel
 * @property string $principalId
 * @property 'USER'|'GROUP' $principalType
 */
class FleetMember extends Shape
{
    /**
     * @param array{
     *     farmId: string,
     *     fleetId: string,
     *     identityStoreId: string,
     *     membershipLevel: 'VIEWER'|'CONTRIBUTOR'|'OWNER'|'MANAGER',
     *     principalId: string,
     *     principalType: 'USER'|'GROUP'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
