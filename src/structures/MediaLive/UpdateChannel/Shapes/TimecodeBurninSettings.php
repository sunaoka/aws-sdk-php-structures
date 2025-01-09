<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'EXTRA_SMALL_10'|'LARGE_48'|'MEDIUM_32'|'SMALL_16' $FontSize
 * @property 'BOTTOM_CENTER'|'BOTTOM_LEFT'|'BOTTOM_RIGHT'|'MIDDLE_CENTER'|'MIDDLE_LEFT'|'MIDDLE_RIGHT'|'TOP_CENTER'|'TOP_LEFT'|'TOP_RIGHT' $Position
 * @property string $Prefix
 */
class TimecodeBurninSettings extends Shape
{
    /**
     * @param array{
     *     FontSize: 'EXTRA_SMALL_10'|'LARGE_48'|'MEDIUM_32'|'SMALL_16',
     *     Position: 'BOTTOM_CENTER'|'BOTTOM_LEFT'|'BOTTOM_RIGHT'|'MIDDLE_CENTER'|'MIDDLE_LEFT'|'MIDDLE_RIGHT'|'TOP_CENTER'|'TOP_LEFT'|'TOP_RIGHT',
     *     Prefix?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
