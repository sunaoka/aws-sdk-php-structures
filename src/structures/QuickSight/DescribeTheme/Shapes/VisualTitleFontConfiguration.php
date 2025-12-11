<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTheme\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FontConfiguration|null $FontConfiguration
 * @property 'LEFT'|'CENTER'|'RIGHT'|'AUTO'|null $TextAlignment
 * @property 'CAPITALIZE'|null $TextTransform
 */
class VisualTitleFontConfiguration extends Shape
{
    /**
     * @param array{
     *     FontConfiguration?: FontConfiguration|null,
     *     TextAlignment?: 'LEFT'|'CENTER'|'RIGHT'|'AUTO'|null,
     *     TextTransform?: 'CAPITALIZE'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
