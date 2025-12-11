<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeWorkspace\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Background
 * @property string|null $TextBackgroundHover
 * @property string|null $TextBackgroundActive
 * @property string|null $Text
 * @property string|null $TextHover
 * @property string|null $TextActive
 * @property bool|null $InvertActionsColors
 */
class PaletteNavigation extends Shape
{
    /**
     * @param array{
     *     Background?: string|null,
     *     TextBackgroundHover?: string|null,
     *     TextBackgroundActive?: string|null,
     *     Text?: string|null,
     *     TextHover?: string|null,
     *     TextActive?: string|null,
     *     InvertActionsColors?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
