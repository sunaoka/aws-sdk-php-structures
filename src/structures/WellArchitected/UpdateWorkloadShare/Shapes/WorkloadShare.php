<?php

namespace Sunaoka\Aws\Structures\WellArchitected\UpdateWorkloadShare\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ShareId
 * @property string $SharedBy
 * @property string $SharedWith
 * @property 'READONLY'|'CONTRIBUTOR' $PermissionType
 * @property 'ACCEPTED'|'REJECTED'|'PENDING'|'REVOKED'|'EXPIRED'|'ASSOCIATING'|'ASSOCIATED'|'FAILED' $Status
 * @property string $WorkloadName
 * @property string $WorkloadId
 */
class WorkloadShare extends Shape
{
    /**
     * @param array{
     *     ShareId?: string,
     *     SharedBy?: string,
     *     SharedWith?: string,
     *     PermissionType?: 'READONLY'|'CONTRIBUTOR',
     *     Status?: 'ACCEPTED'|'REJECTED'|'PENDING'|'REVOKED'|'EXPIRED'|'ASSOCIATING'|'ASSOCIATED'|'FAILED',
     *     WorkloadName?: string,
     *     WorkloadId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
