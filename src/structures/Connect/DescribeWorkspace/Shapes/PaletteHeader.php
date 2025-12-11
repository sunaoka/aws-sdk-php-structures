<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeWorkspace\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Background
 * @property string|null $Text
 * @property string|null $TextHover
 * @property bool|null $InvertActionsColors
 */
class PaletteHeader extends Shape
{
    /**
     * @param array{
     *     Background?: string|null,
     *     Text?: string|null,
     *     TextHover?: string|null,
     *     InvertActionsColors?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
