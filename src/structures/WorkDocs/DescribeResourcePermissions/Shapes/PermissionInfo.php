<?php

namespace Sunaoka\Aws\Structures\WorkDocs\DescribeResourcePermissions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'VIEWER'|'CONTRIBUTOR'|'OWNER'|'COOWNER' $Role
 * @property 'DIRECT'|'INHERITED' $Type
 */
class PermissionInfo extends Shape
{
    /**
     * @param array{
     *     Role?: 'VIEWER'|'CONTRIBUTOR'|'OWNER'|'COOWNER',
     *     Type?: 'DIRECT'|'INHERITED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
