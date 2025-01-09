<?php

namespace Sunaoka\Aws\Structures\WellArchitected\UpdateShareInvitation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ShareInvitationId
 * @property 'WORKLOAD'|'LENS'|'PROFILE'|'TEMPLATE' $ShareResourceType
 * @property string $WorkloadId
 * @property string $LensAlias
 * @property string $LensArn
 * @property string $ProfileArn
 * @property string $TemplateArn
 */
class ShareInvitation extends Shape
{
    /**
     * @param array{
     *     ShareInvitationId?: string,
     *     ShareResourceType?: 'WORKLOAD'|'LENS'|'PROFILE'|'TEMPLATE',
     *     WorkloadId?: string,
     *     LensAlias?: string,
     *     LensArn?: string,
     *     ProfileArn?: string,
     *     TemplateArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
