<?php

namespace Sunaoka\Aws\Structures\WorkDocs\DescribeResourcePermissions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'VIEWER'|'CONTRIBUTOR'|'OWNER'|'COOWNER'|null $Role
 * @property 'DIRECT'|'INHERITED'|null $Type
 */
class PermissionInfo extends Shape
{
    /**
     * @param array{
     *     Role?: 'VIEWER'|'CONTRIBUTOR'|'OWNER'|'COOWNER'|null,
     *     Type?: 'DIRECT'|'INHERITED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
