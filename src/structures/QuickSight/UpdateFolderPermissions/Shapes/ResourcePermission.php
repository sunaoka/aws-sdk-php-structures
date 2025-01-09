<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateFolderPermissions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Principal
 * @property list<string> $Actions
 */
class ResourcePermission extends Shape
{
    /**
     * @param array{
     *     Principal: string,
     *     Actions: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
