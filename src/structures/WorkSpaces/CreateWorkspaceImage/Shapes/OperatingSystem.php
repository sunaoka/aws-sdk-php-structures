<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\CreateWorkspaceImage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'WINDOWS'|'LINUX'|null $Type
 */
class OperatingSystem extends Shape
{
    /**
     * @param array{Type?: 'WINDOWS'|'LINUX'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
