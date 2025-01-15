<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyFpgaImageAttribute\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<LoadPermissionRequest>|null $Add
 * @property list<LoadPermissionRequest>|null $Remove
 */
class LoadPermissionModifications extends Shape
{
    /**
     * @param array{
     *     Add?: list<LoadPermissionRequest>|null,
     *     Remove?: list<LoadPermissionRequest>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
