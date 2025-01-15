<?php

namespace Sunaoka\Aws\Structures\WellArchitected\ListShareInvitations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ShareInvitationId
 * @property string|null $SharedBy
 * @property string|null $SharedWith
 * @property 'READONLY'|'CONTRIBUTOR'|null $PermissionType
 * @property 'WORKLOAD'|'LENS'|'PROFILE'|'TEMPLATE'|null $ShareResourceType
 * @property string|null $WorkloadName
 * @property string|null $WorkloadId
 * @property string|null $LensName
 * @property string|null $LensArn
 * @property string|null $ProfileName
 * @property string|null $ProfileArn
 * @property string|null $TemplateName
 * @property string|null $TemplateArn
 */
class ShareInvitationSummary extends Shape
{
    /**
     * @param array{
     *     ShareInvitationId?: string|null,
     *     SharedBy?: string|null,
     *     SharedWith?: string|null,
     *     PermissionType?: 'READONLY'|'CONTRIBUTOR'|null,
     *     ShareResourceType?: 'WORKLOAD'|'LENS'|'PROFILE'|'TEMPLATE'|null,
     *     WorkloadName?: string|null,
     *     WorkloadId?: string|null,
     *     LensName?: string|null,
     *     LensArn?: string|null,
     *     ProfileName?: string|null,
     *     ProfileArn?: string|null,
     *     TemplateName?: string|null,
     *     TemplateArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
