<?php

namespace Sunaoka\Aws\Structures\WellArchitected\ListShareInvitations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ShareInvitationId
 * @property string $SharedBy
 * @property string $SharedWith
 * @property 'READONLY'|'CONTRIBUTOR' $PermissionType
 * @property 'WORKLOAD'|'LENS'|'PROFILE'|'TEMPLATE' $ShareResourceType
 * @property string $WorkloadName
 * @property string $WorkloadId
 * @property string $LensName
 * @property string $LensArn
 * @property string $ProfileName
 * @property string $ProfileArn
 * @property string $TemplateName
 * @property string $TemplateArn
 */
class ShareInvitationSummary extends Shape
{
    /**
     * @param array{
     *     ShareInvitationId?: string,
     *     SharedBy?: string,
     *     SharedWith?: string,
     *     PermissionType?: 'READONLY'|'CONTRIBUTOR',
     *     ShareResourceType?: 'WORKLOAD'|'LENS'|'PROFILE'|'TEMPLATE',
     *     WorkloadName?: string,
     *     WorkloadId?: string,
     *     LensName?: string,
     *     LensArn?: string,
     *     ProfileName?: string,
     *     ProfileArn?: string,
     *     TemplateName?: string,
     *     TemplateArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
