<?php

namespace Sunaoka\Aws\Structures\WellArchitected\UpdateShareInvitation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ShareInvitationId
 * @property 'WORKLOAD'|'LENS'|'PROFILE'|null $ShareResourceType
 * @property string|null $WorkloadId
 * @property string|null $LensAlias
 * @property string|null $LensArn
 * @property string|null $ProfileArn
 */
class ShareInvitation extends Shape
{
    /**
     * @param array{
     *     ShareInvitationId?: string|null,
     *     ShareResourceType?: 'WORKLOAD'|'LENS'|'PROFILE'|null,
     *     WorkloadId?: string|null,
     *     LensAlias?: string|null,
     *     LensArn?: string|null,
     *     ProfileArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
