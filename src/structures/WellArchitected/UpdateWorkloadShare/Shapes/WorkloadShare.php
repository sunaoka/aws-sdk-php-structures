<?php

namespace Sunaoka\Aws\Structures\WellArchitected\UpdateWorkloadShare\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ShareId
 * @property string|null $SharedBy
 * @property string|null $SharedWith
 * @property 'READONLY'|'CONTRIBUTOR'|null $PermissionType
 * @property 'ACCEPTED'|'REJECTED'|'PENDING'|'REVOKED'|'EXPIRED'|'ASSOCIATING'|'ASSOCIATED'|'FAILED'|null $Status
 * @property string|null $WorkloadName
 * @property string|null $WorkloadId
 */
class WorkloadShare extends Shape
{
    /**
     * @param array{
     *     ShareId?: string|null,
     *     SharedBy?: string|null,
     *     SharedWith?: string|null,
     *     PermissionType?: 'READONLY'|'CONTRIBUTOR'|null,
     *     Status?: 'ACCEPTED'|'REJECTED'|'PENDING'|'REVOKED'|'EXPIRED'|'ASSOCIATING'|'ASSOCIATED'|'FAILED'|null,
     *     WorkloadName?: string|null,
     *     WorkloadId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
