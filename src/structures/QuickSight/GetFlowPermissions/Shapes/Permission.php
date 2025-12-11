<?php

namespace Sunaoka\Aws\Structures\QuickSight\GetFlowPermissions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $Actions
 * @property string $Principal
 */
class Permission extends Shape
{
    /**
     * @param array{
     *     Actions: list<string>,
     *     Principal: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
