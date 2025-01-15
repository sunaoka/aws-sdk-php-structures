<?php

namespace Sunaoka\Aws\Structures\WorkDocs\DescribeResourcePermissions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property 'USER'|'GROUP'|'INVITE'|'ANONYMOUS'|'ORGANIZATION'|null $Type
 * @property list<PermissionInfo>|null $Roles
 */
class Principal extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     Type?: 'USER'|'GROUP'|'INVITE'|'ANONYMOUS'|'ORGANIZATION'|null,
     *     Roles?: list<PermissionInfo>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
