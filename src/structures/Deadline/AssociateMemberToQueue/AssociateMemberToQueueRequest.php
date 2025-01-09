<?php

namespace Sunaoka\Aws\Structures\Deadline\AssociateMemberToQueue;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $farmId
 * @property string $queueId
 * @property string $principalId
 * @property 'USER'|'GROUP' $principalType
 * @property string $identityStoreId
 * @property 'VIEWER'|'CONTRIBUTOR'|'OWNER'|'MANAGER' $membershipLevel
 */
class AssociateMemberToQueueRequest extends Request
{
    /**
     * @param array{
     *     farmId: string,
     *     queueId: string,
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
