<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'HIDDEN'|'VISIBLE'|null $Visibility
 * @property FontConfiguration|null $FontConfiguration
 * @property 'LEFT'|'CENTER'|'RIGHT'|'AUTO'|null $HorizontalTextAlignment
 */
class PanelTitleOptions extends Shape
{
    /**
     * @param array{
     *     Visibility?: 'HIDDEN'|'VISIBLE'|null,
     *     FontConfiguration?: FontConfiguration|null,
     *     HorizontalTextAlignment?: 'LEFT'|'CENTER'|'RIGHT'|'AUTO'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
