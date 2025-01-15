<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeVpcEndpointServicePermissions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'All'|'Service'|'OrganizationUnit'|'Account'|'User'|'Role'|null $PrincipalType
 * @property string|null $Principal
 * @property string|null $ServicePermissionId
 * @property list<Tag>|null $Tags
 * @property string|null $ServiceId
 */
class AllowedPrincipal extends Shape
{
    /**
     * @param array{
     *     PrincipalType?: 'All'|'Service'|'OrganizationUnit'|'Account'|'User'|'Role'|null,
     *     Principal?: string|null,
     *     ServicePermissionId?: string|null,
     *     Tags?: list<Tag>|null,
     *     ServiceId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
