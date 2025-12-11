<?php

namespace Sunaoka\Aws\Structures\Connect\CreateWorkspace\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property WorkspaceThemeConfig|null $Light
 * @property WorkspaceThemeConfig|null $Dark
 */
class WorkspaceTheme extends Shape
{
    /**
     * @param array{
     *     Light?: WorkspaceThemeConfig|null,
     *     Dark?: WorkspaceThemeConfig|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
