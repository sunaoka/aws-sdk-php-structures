<?php

namespace Sunaoka\Aws\Structures\MediaConvert\ListJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<10, 48>|null $FontSize
 * @property 'TOP_CENTER'|'TOP_LEFT'|'TOP_RIGHT'|'MIDDLE_LEFT'|'MIDDLE_CENTER'|'MIDDLE_RIGHT'|'BOTTOM_LEFT'|'BOTTOM_CENTER'|'BOTTOM_RIGHT'|null $Position
 * @property string|null $Prefix
 */
class TimecodeBurnin extends Shape
{
    /**
     * @param array{
     *     FontSize?: int<10, 48>|null,
     *     Position?: 'TOP_CENTER'|'TOP_LEFT'|'TOP_RIGHT'|'MIDDLE_LEFT'|'MIDDLE_CENTER'|'MIDDLE_RIGHT'|'BOTTOM_LEFT'|'BOTTOM_CENTER'|'BOTTOM_RIGHT'|null,
     *     Prefix?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
