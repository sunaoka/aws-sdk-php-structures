<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyImageAttribute\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<LaunchPermission> $Add
 * @property list<LaunchPermission> $Remove
 */
class LaunchPermissionModifications extends Shape
{
    /**
     * @param array{
     *     Add?: list<LaunchPermission>,
     *     Remove?: list<LaunchPermission>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
