<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ReferenceLineValueLabelConfiguration $ValueLabelConfiguration
 * @property ReferenceLineCustomLabelConfiguration $CustomLabelConfiguration
 * @property FontConfiguration $FontConfiguration
 * @property string $FontColor
 * @property 'LEFT'|'CENTER'|'RIGHT' $HorizontalPosition
 * @property 'ABOVE'|'BELOW' $VerticalPosition
 */
class ReferenceLineLabelConfiguration extends Shape
{
    /**
     * @param array{
     *     ValueLabelConfiguration?: ReferenceLineValueLabelConfiguration,
     *     CustomLabelConfiguration?: ReferenceLineCustomLabelConfiguration,
     *     FontConfiguration?: FontConfiguration,
     *     FontColor?: string,
     *     HorizontalPosition?: 'LEFT'|'CENTER'|'RIGHT',
     *     VerticalPosition?: 'ABOVE'|'BELOW'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
