<?php

namespace Sunaoka\Aws\Structures\MediaLive\StartChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CENTERED'|'LEFT'|'SMART'|null $Alignment
 * @property 'BLACK'|'NONE'|'WHITE'|null $BackgroundColor
 * @property int<0, 255>|null $BackgroundOpacity
 * @property InputLocation|null $Font
 * @property 'BLACK'|'BLUE'|'GREEN'|'RED'|'WHITE'|'YELLOW'|null $FontColor
 * @property int<0, 255>|null $FontOpacity
 * @property int<96, 600>|null $FontResolution
 * @property string|null $FontSize
 * @property 'BLACK'|'BLUE'|'GREEN'|'RED'|'WHITE'|'YELLOW'|null $OutlineColor
 * @property int<0, 10>|null $OutlineSize
 * @property 'BLACK'|'NONE'|'WHITE'|null $ShadowColor
 * @property int<0, 255>|null $ShadowOpacity
 * @property int|null $ShadowXOffset
 * @property int|null $ShadowYOffset
 * @property 'FIXED'|'SCALED'|null $TeletextGridControl
 * @property int<0, max>|null $XPosition
 * @property int<0, max>|null $YPosition
 * @property 'ROWS_16'|'ROWS_20'|'ROWS_24'|null $SubtitleRows
 */
class DvbSubDestinationSettings extends Shape
{
    /**
     * @param array{
     *     Alignment?: 'CENTERED'|'LEFT'|'SMART'|null,
     *     BackgroundColor?: 'BLACK'|'NONE'|'WHITE'|null,
     *     BackgroundOpacity?: int<0, 255>|null,
     *     Font?: InputLocation|null,
     *     FontColor?: 'BLACK'|'BLUE'|'GREEN'|'RED'|'WHITE'|'YELLOW'|null,
     *     FontOpacity?: int<0, 255>|null,
     *     FontResolution?: int<96, 600>|null,
     *     FontSize?: string|null,
     *     OutlineColor?: 'BLACK'|'BLUE'|'GREEN'|'RED'|'WHITE'|'YELLOW'|null,
     *     OutlineSize?: int<0, 10>|null,
     *     ShadowColor?: 'BLACK'|'NONE'|'WHITE'|null,
     *     ShadowOpacity?: int<0, 255>|null,
     *     ShadowXOffset?: int|null,
     *     ShadowYOffset?: int|null,
     *     TeletextGridControl?: 'FIXED'|'SCALED'|null,
     *     XPosition?: int<0, max>|null,
     *     YPosition?: int<0, max>|null,
     *     SubtitleRows?: 'ROWS_16'|'ROWS_20'|'ROWS_24'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
