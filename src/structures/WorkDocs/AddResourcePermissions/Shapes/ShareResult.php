<?php

namespace Sunaoka\Aws\Structures\WorkDocs\AddResourcePermissions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $PrincipalId
 * @property string|null $InviteePrincipalId
 * @property 'VIEWER'|'CONTRIBUTOR'|'OWNER'|'COOWNER'|null $Role
 * @property 'SUCCESS'|'FAILURE'|null $Status
 * @property string|null $ShareId
 * @property string|null $StatusMessage
 */
class ShareResult extends Shape
{
    /**
     * @param array{
     *     PrincipalId?: string|null,
     *     InviteePrincipalId?: string|null,
     *     Role?: 'VIEWER'|'CONTRIBUTOR'|'OWNER'|'COOWNER'|null,
     *     Status?: 'SUCCESS'|'FAILURE'|null,
     *     ShareId?: string|null,
     *     StatusMessage?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
