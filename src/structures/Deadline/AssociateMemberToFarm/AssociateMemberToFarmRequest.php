<?php

namespace Sunaoka\Aws\Structures\Deadline\AssociateMemberToFarm;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $farmId
 * @property string $principalId
 * @property 'USER'|'GROUP' $principalType
 * @property string $identityStoreId
 * @property 'VIEWER'|'CONTRIBUTOR'|'OWNER'|'MANAGER' $membershipLevel
 */
class AssociateMemberToFarmRequest extends Request
{
    /**
     * @param array{
     *     farmId: string,
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
