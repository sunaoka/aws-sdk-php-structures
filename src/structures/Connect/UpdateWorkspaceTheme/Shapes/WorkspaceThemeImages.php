<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateWorkspaceTheme\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ImagesLogo|null $Logo
 */
class WorkspaceThemeImages extends Shape
{
    /**
     * @param array{Logo?: ImagesLogo|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
