<?php

namespace Sunaoka\Aws\Structures\WorkDocs\DescribeResourcePermissions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property 'USER'|'GROUP'|'INVITE'|'ANONYMOUS'|'ORGANIZATION' $Type
 * @property list<PermissionInfo> $Roles
 */
class Principal extends Shape
{
    /**
     * @param array{
     *     Id?: string,
     *     Type?: 'USER'|'GROUP'|'INVITE'|'ANONYMOUS'|'ORGANIZATION',
     *     Roles?: list<PermissionInfo>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
