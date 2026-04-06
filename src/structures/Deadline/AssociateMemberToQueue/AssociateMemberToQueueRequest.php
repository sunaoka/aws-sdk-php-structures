<?php

namespace Sunaoka\Aws\Structures\Deadline\AssociateMemberToQueue;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $farmId
 * @property string $identityStoreId
 * @property 'VIEWER'|'CONTRIBUTOR'|'OWNER'|'MANAGER' $membershipLevel
 * @property string $principalId
 * @property 'USER'|'GROUP' $principalType
 * @property string $queueId
 */
class AssociateMemberToQueueRequest extends Request
{
    /**
     * @param array{
     *     farmId: string,
     *     identityStoreId: string,
     *     membershipLevel: 'VIEWER'|'CONTRIBUTOR'|'OWNER'|'MANAGER',
     *     principalId: string,
     *     principalType: 'USER'|'GROUP',
     *     queueId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
