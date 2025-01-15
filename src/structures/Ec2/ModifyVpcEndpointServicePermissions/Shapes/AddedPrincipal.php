<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyVpcEndpointServicePermissions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'All'|'Service'|'OrganizationUnit'|'Account'|'User'|'Role'|null $PrincipalType
 * @property string|null $Principal
 * @property string|null $ServicePermissionId
 * @property string|null $ServiceId
 */
class AddedPrincipal extends Shape
{
    /**
     * @param array{
     *     PrincipalType?: 'All'|'Service'|'OrganizationUnit'|'Account'|'User'|'Role'|null,
     *     Principal?: string|null,
     *     ServicePermissionId?: string|null,
     *     ServiceId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
