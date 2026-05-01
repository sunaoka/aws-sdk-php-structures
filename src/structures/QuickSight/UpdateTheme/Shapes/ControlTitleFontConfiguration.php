<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateTheme\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FontConfiguration|null $FontConfiguration
 * @property 'LEFT'|'CENTER'|'RIGHT'|'AUTO'|null $TextAlignment
 */
class ControlTitleFontConfiguration extends Shape
{
    /**
     * @param array{
     *     FontConfiguration?: FontConfiguration|null,
     *     TextAlignment?: 'LEFT'|'CENTER'|'RIGHT'|'AUTO'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
