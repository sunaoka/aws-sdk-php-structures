<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyVpcEndpointServicePermissions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'All'|'Service'|'OrganizationUnit'|'Account'|'User'|'Role' $PrincipalType
 * @property string $Principal
 * @property string $ServicePermissionId
 * @property string $ServiceId
 */
class AddedPrincipal extends Shape
{
    /**
     * @param array{
     *     PrincipalType?: 'All'|'Service'|'OrganizationUnit'|'Account'|'User'|'Role',
     *     Principal?: string,
     *     ServicePermissionId?: string,
     *     ServiceId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
