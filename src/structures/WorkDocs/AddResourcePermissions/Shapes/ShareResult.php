<?php

namespace Sunaoka\Aws\Structures\WorkDocs\AddResourcePermissions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PrincipalId
 * @property string $InviteePrincipalId
 * @property 'VIEWER'|'CONTRIBUTOR'|'OWNER'|'COOWNER' $Role
 * @property 'SUCCESS'|'FAILURE' $Status
 * @property string $ShareId
 * @property string $StatusMessage
 */
class ShareResult extends Shape
{
    /**
     * @param array{
     *     PrincipalId?: string,
     *     InviteePrincipalId?: string,
     *     Role?: 'VIEWER'|'CONTRIBUTOR'|'OWNER'|'COOWNER',
     *     Status?: 'SUCCESS'|'FAILURE',
     *     ShareId?: string,
     *     StatusMessage?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
