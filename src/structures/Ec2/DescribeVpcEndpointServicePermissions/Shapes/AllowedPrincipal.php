<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeVpcEndpointServicePermissions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'All'|'Service'|'OrganizationUnit'|'Account'|'User'|'Role' $PrincipalType
 * @property string $Principal
 * @property string $ServicePermissionId
 * @property list<Tag> $Tags
 * @property string $ServiceId
 */
class AllowedPrincipal extends Shape
{
    /**
     * @param array{
     *     PrincipalType?: 'All'|'Service'|'OrganizationUnit'|'Account'|'User'|'Role',
     *     Principal?: string,
     *     ServicePermissionId?: string,
     *     Tags?: list<Tag>,
     *     ServiceId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
