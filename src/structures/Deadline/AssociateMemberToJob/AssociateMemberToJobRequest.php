<?php

namespace Sunaoka\Aws\Structures\Deadline\AssociateMemberToJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $farmId
 * @property string $queueId
 * @property string $jobId
 * @property 'USER'|'GROUP' $principalType
 * @property string $identityStoreId
 * @property 'VIEWER'|'CONTRIBUTOR'|'OWNER'|'MANAGER' $membershipLevel
 * @property string $principalId
 * @property string|null $identityCenterRegion
 */
class AssociateMemberToJobRequest extends Request
{
    /**
     * @param array{
     *     farmId: string,
     *     queueId: string,
     *     jobId: string,
     *     principalType: 'USER'|'GROUP',
     *     identityStoreId: string,
     *     membershipLevel: 'VIEWER'|'CONTRIBUTOR'|'OWNER'|'MANAGER',
     *     principalId: string,
     *     identityCenterRegion?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
