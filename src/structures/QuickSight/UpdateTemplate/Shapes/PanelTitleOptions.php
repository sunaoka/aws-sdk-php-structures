<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'HIDDEN'|'VISIBLE' $Visibility
 * @property FontConfiguration $FontConfiguration
 * @property 'LEFT'|'CENTER'|'RIGHT'|'AUTO' $HorizontalTextAlignment
 */
class PanelTitleOptions extends Shape
{
    /**
     * @param array{
     *     Visibility?: 'HIDDEN'|'VISIBLE',
     *     FontConfiguration?: FontConfiguration,
     *     HorizontalTextAlignment?: 'LEFT'|'CENTER'|'RIGHT'|'AUTO'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
