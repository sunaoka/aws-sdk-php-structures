<?php

namespace Sunaoka\Aws\Structures\Deadline\ListFleetMembers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $farmId
 * @property string $fleetId
 * @property string $principalId
 * @property 'USER'|'GROUP' $principalType
 * @property string $identityStoreId
 * @property 'VIEWER'|'CONTRIBUTOR'|'OWNER'|'MANAGER' $membershipLevel
 */
class FleetMember extends Shape
{
    /**
     * @param array{
     *     farmId: string,
     *     fleetId: string,
     *     principalId: string,
     *     principalType: 'USER'|'GROUP',
     *     identityStoreId: string,
     *     membershipLevel: 'VIEWER'|'CONTRIBUTOR'|'OWNER'|'MANAGER'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
