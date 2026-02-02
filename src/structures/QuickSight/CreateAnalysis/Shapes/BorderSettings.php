<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'HIDDEN'|'VISIBLE'|null $BorderVisibility
 * @property string|null $BorderWidth
 * @property string|null $BorderColor
 */
class BorderSettings extends Shape
{
    /**
     * @param array{
     *     BorderVisibility?: 'HIDDEN'|'VISIBLE'|null,
     *     BorderWidth?: string|null,
     *     BorderColor?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
