<?php

namespace Sunaoka\Aws\Structures\Connect\CreateWorkspace\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property WorkspaceThemePalette|null $Palette
 * @property WorkspaceThemeImages|null $Images
 * @property WorkspaceThemeTypography|null $Typography
 */
class WorkspaceThemeConfig extends Shape
{
    /**
     * @param array{
     *     Palette?: WorkspaceThemePalette|null,
     *     Images?: WorkspaceThemeImages|null,
     *     Typography?: WorkspaceThemeTypography|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
