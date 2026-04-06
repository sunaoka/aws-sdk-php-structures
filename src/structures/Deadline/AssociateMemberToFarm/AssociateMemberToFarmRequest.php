<?php

namespace Sunaoka\Aws\Structures\Deadline\AssociateMemberToFarm;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $farmId
 * @property string $identityStoreId
 * @property 'VIEWER'|'CONTRIBUTOR'|'OWNER'|'MANAGER' $membershipLevel
 * @property string $principalId
 * @property 'USER'|'GROUP' $principalType
 */
class AssociateMemberToFarmRequest extends Request
{
    /**
     * @param array{
     *     farmId: string,
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
