<?php

namespace Sunaoka\Aws\Structures\WellArchitected\UpdateShareInvitation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ShareInvitationId
 * @property 'WORKLOAD'|'LENS'|'PROFILE'|'TEMPLATE'|null $ShareResourceType
 * @property string|null $WorkloadId
 * @property string|null $LensAlias
 * @property string|null $LensArn
 * @property string|null $ProfileArn
 * @property string|null $TemplateArn
 */
class ShareInvitation extends Shape
{
    /**
     * @param array{
     *     ShareInvitationId?: string|null,
     *     ShareResourceType?: 'WORKLOAD'|'LENS'|'PROFILE'|'TEMPLATE'|null,
     *     WorkloadId?: string|null,
     *     LensAlias?: string|null,
     *     LensArn?: string|null,
     *     ProfileArn?: string|null,
     *     TemplateArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
