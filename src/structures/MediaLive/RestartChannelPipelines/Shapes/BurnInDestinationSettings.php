<?php

namespace Sunaoka\Aws\Structures\MediaLive\RestartChannelPipelines\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CENTERED'|'LEFT'|'SMART'|null $Alignment
 * @property 'BLACK'|'NONE'|'WHITE'|null $BackgroundColor
 * @property int|null $BackgroundOpacity
 * @property InputLocation|null $Font
 * @property 'BLACK'|'BLUE'|'GREEN'|'RED'|'WHITE'|'YELLOW'|null $FontColor
 * @property int|null $FontOpacity
 * @property int|null $FontResolution
 * @property string|null $FontSize
 * @property 'BLACK'|'BLUE'|'GREEN'|'RED'|'WHITE'|'YELLOW'|null $OutlineColor
 * @property int|null $OutlineSize
 * @property 'BLACK'|'NONE'|'WHITE'|null $ShadowColor
 * @property int|null $ShadowOpacity
 * @property int|null $ShadowXOffset
 * @property int|null $ShadowYOffset
 * @property 'FIXED'|'SCALED'|null $TeletextGridControl
 * @property int|null $XPosition
 * @property int|null $YPosition
 * @property 'ROWS_16'|'ROWS_20'|'ROWS_24'|null $SubtitleRows
 */
class BurnInDestinationSettings extends Shape
{
    /**
     * @param array{
     *     Alignment?: 'CENTERED'|'LEFT'|'SMART'|null,
     *     BackgroundColor?: 'BLACK'|'NONE'|'WHITE'|null,
     *     BackgroundOpacity?: int|null,
     *     Font?: InputLocation|null,
     *     FontColor?: 'BLACK'|'BLUE'|'GREEN'|'RED'|'WHITE'|'YELLOW'|null,
     *     FontOpacity?: int|null,
     *     FontResolution?: int|null,
     *     FontSize?: string|null,
     *     OutlineColor?: 'BLACK'|'BLUE'|'GREEN'|'RED'|'WHITE'|'YELLOW'|null,
     *     OutlineSize?: int|null,
     *     ShadowColor?: 'BLACK'|'NONE'|'WHITE'|null,
     *     ShadowOpacity?: int|null,
     *     ShadowXOffset?: int|null,
     *     ShadowYOffset?: int|null,
     *     TeletextGridControl?: 'FIXED'|'SCALED'|null,
     *     XPosition?: int|null,
     *     YPosition?: int|null,
     *     SubtitleRows?: 'ROWS_16'|'ROWS_20'|'ROWS_24'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
