<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ReferenceLineValueLabelConfiguration|null $ValueLabelConfiguration
 * @property ReferenceLineCustomLabelConfiguration|null $CustomLabelConfiguration
 * @property FontConfiguration|null $FontConfiguration
 * @property string|null $FontColor
 * @property 'LEFT'|'CENTER'|'RIGHT'|null $HorizontalPosition
 * @property 'ABOVE'|'BELOW'|null $VerticalPosition
 */
class ReferenceLineLabelConfiguration extends Shape
{
    /**
     * @param array{
     *     ValueLabelConfiguration?: ReferenceLineValueLabelConfiguration|null,
     *     CustomLabelConfiguration?: ReferenceLineCustomLabelConfiguration|null,
     *     FontConfiguration?: FontConfiguration|null,
     *     FontColor?: string|null,
     *     HorizontalPosition?: 'LEFT'|'CENTER'|'RIGHT'|null,
     *     VerticalPosition?: 'ABOVE'|'BELOW'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
