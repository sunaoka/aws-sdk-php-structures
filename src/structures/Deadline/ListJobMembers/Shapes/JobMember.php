<?php

namespace Sunaoka\Aws\Structures\Deadline\ListJobMembers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $farmId
 * @property string $identityStoreId
 * @property string $jobId
 * @property 'VIEWER'|'CONTRIBUTOR'|'OWNER'|'MANAGER' $membershipLevel
 * @property string $principalId
 * @property 'USER'|'GROUP' $principalType
 * @property string $queueId
 */
class JobMember extends Shape
{
    /**
     * @param array{
     *     farmId: string,
     *     identityStoreId: string,
     *     jobId: string,
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
