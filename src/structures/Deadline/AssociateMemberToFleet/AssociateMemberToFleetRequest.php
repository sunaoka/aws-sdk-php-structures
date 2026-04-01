<?php

namespace Sunaoka\Aws\Structures\Deadline\AssociateMemberToFleet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $farmId
 * @property string $fleetId
 * @property 'USER'|'GROUP' $principalType
 * @property string $identityStoreId
 * @property 'VIEWER'|'CONTRIBUTOR'|'OWNER'|'MANAGER' $membershipLevel
 * @property string $principalId
 */
class AssociateMemberToFleetRequest extends Request
{
    /**
     * @param array{
     *     farmId: string,
     *     fleetId: string,
     *     principalType: 'USER'|'GROUP',
     *     identityStoreId: string,
     *     membershipLevel: 'VIEWER'|'CONTRIBUTOR'|'OWNER'|'MANAGER',
     *     principalId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
