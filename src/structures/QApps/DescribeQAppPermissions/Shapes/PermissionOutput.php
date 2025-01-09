<?php

namespace Sunaoka\Aws\Structures\QApps\DescribeQAppPermissions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'read'|'write' $action
 * @property PrincipalOutput $principal
 */
class PermissionOutput extends Shape
{
    /**
     * @param array{
     *     action: 'read'|'write',
     *     principal: PrincipalOutput
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
