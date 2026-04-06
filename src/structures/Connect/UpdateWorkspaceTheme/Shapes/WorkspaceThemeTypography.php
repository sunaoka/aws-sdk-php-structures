<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateWorkspaceTheme\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FontFamily|null $FontFamily
 */
class WorkspaceThemeTypography extends Shape
{
    /**
     * @param array{FontFamily?: FontFamily|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
