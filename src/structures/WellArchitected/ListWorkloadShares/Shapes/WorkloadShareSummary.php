<?php

namespace Sunaoka\Aws\Structures\WellArchitected\ListWorkloadShares\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ShareId
 * @property string $SharedWith
 * @property 'READONLY'|'CONTRIBUTOR' $PermissionType
 * @property 'ACCEPTED'|'REJECTED'|'PENDING'|'REVOKED'|'EXPIRED'|'ASSOCIATING'|'ASSOCIATED'|'FAILED' $Status
 * @property string $StatusMessage
 */
class WorkloadShareSummary extends Shape
{
    /**
     * @param array{
     *     ShareId?: string,
     *     SharedWith?: string,
     *     PermissionType?: 'READONLY'|'CONTRIBUTOR',
     *     Status?: 'ACCEPTED'|'REJECTED'|'PENDING'|'REVOKED'|'EXPIRED'|'ASSOCIATING'|'ASSOCIATED'|'FAILED',
     *     StatusMessage?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
