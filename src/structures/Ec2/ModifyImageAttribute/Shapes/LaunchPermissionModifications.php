<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyImageAttribute\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<LaunchPermission>|null $Add
 * @property list<LaunchPermission>|null $Remove
 */
class LaunchPermissionModifications extends Shape
{
    /**
     * @param array{
     *     Add?: list<LaunchPermission>|null,
     *     Remove?: list<LaunchPermission>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
