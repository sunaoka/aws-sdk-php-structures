<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyFpgaImageAttribute\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<LoadPermissionRequest> $Add
 * @property list<LoadPermissionRequest> $Remove
 */
class LoadPermissionModifications extends Shape
{
    /**
     * @param array{
     *     Add?: list<LoadPermissionRequest>,
     *     Remove?: list<LoadPermissionRequest>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
