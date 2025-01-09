<?php

namespace Sunaoka\Aws\Structures\MediaLive\DeleteChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CENTERED'|'LEFT'|'SMART' $Alignment
 * @property 'BLACK'|'NONE'|'WHITE' $BackgroundColor
 * @property int<0, 255> $BackgroundOpacity
 * @property InputLocation $Font
 * @property 'BLACK'|'BLUE'|'GREEN'|'RED'|'WHITE'|'YELLOW' $FontColor
 * @property int<0, 255> $FontOpacity
 * @property int<96, 600> $FontResolution
 * @property string $FontSize
 * @property 'BLACK'|'BLUE'|'GREEN'|'RED'|'WHITE'|'YELLOW' $OutlineColor
 * @property int<0, 10> $OutlineSize
 * @property 'BLACK'|'NONE'|'WHITE' $ShadowColor
 * @property int<0, 255> $ShadowOpacity
 * @property int $ShadowXOffset
 * @property int $ShadowYOffset
 * @property 'FIXED'|'SCALED' $TeletextGridControl
 * @property int<0, max> $XPosition
 * @property int<0, max> $YPosition
 */
class DvbSubDestinationSettings extends Shape
{
    /**
     * @param array{
     *     Alignment?: 'CENTERED'|'LEFT'|'SMART',
     *     BackgroundColor?: 'BLACK'|'NONE'|'WHITE',
     *     BackgroundOpacity?: int<0, 255>,
     *     Font?: InputLocation,
     *     FontColor?: 'BLACK'|'BLUE'|'GREEN'|'RED'|'WHITE'|'YELLOW',
     *     FontOpacity?: int<0, 255>,
     *     FontResolution?: int<96, 600>,
     *     FontSize?: string,
     *     OutlineColor?: 'BLACK'|'BLUE'|'GREEN'|'RED'|'WHITE'|'YELLOW',
     *     OutlineSize?: int<0, 10>,
     *     ShadowColor?: 'BLACK'|'NONE'|'WHITE',
     *     ShadowOpacity?: int<0, 255>,
     *     ShadowXOffset?: int,
     *     ShadowYOffset?: int,
     *     TeletextGridControl?: 'FIXED'|'SCALED',
     *     XPosition?: int<0, max>,
     *     YPosition?: int<0, max>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
