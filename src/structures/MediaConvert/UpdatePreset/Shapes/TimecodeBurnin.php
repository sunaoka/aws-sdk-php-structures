<?php

namespace Sunaoka\Aws\Structures\MediaConvert\UpdatePreset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<10, 48> $FontSize
 * @property 'TOP_CENTER'|'TOP_LEFT'|'TOP_RIGHT'|'MIDDLE_LEFT'|'MIDDLE_CENTER'|'MIDDLE_RIGHT'|'BOTTOM_LEFT'|'BOTTOM_CENTER'|'BOTTOM_RIGHT' $Position
 * @property string $Prefix
 */
class TimecodeBurnin extends Shape
{
    /**
     * @param array{
     *     FontSize?: int<10, 48>,
     *     Position?: 'TOP_CENTER'|'TOP_LEFT'|'TOP_RIGHT'|'MIDDLE_LEFT'|'MIDDLE_CENTER'|'MIDDLE_RIGHT'|'BOTTOM_LEFT'|'BOTTOM_CENTER'|'BOTTOM_RIGHT',
     *     Prefix?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
