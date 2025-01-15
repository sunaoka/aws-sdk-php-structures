<?php

namespace Sunaoka\Aws\Structures\WellArchitected\ListWorkloadShares\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ShareId
 * @property string|null $SharedWith
 * @property 'READONLY'|'CONTRIBUTOR'|null $PermissionType
 * @property 'ACCEPTED'|'REJECTED'|'PENDING'|'REVOKED'|'EXPIRED'|'ASSOCIATING'|'ASSOCIATED'|'FAILED'|null $Status
 * @property string|null $StatusMessage
 */
class WorkloadShareSummary extends Shape
{
    /**
     * @param array{
     *     ShareId?: string|null,
     *     SharedWith?: string|null,
     *     PermissionType?: 'READONLY'|'CONTRIBUTOR'|null,
     *     Status?: 'ACCEPTED'|'REJECTED'|'PENDING'|'REVOKED'|'EXPIRED'|'ASSOCIATING'|'ASSOCIATED'|'FAILED'|null,
     *     StatusMessage?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
