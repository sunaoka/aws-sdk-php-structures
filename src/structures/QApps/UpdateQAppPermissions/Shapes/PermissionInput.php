<?php

namespace Sunaoka\Aws\Structures\QApps\UpdateQAppPermissions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'read'|'write' $action
 * @property string $principal
 */
class PermissionInput extends Shape
{
    /**
     * @param array{
     *     action: 'read'|'write',
     *     principal: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
