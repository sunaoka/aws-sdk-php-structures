<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CENTERED'|'LEFT'|'SMART' $Alignment
 * @property 'BLACK'|'NONE'|'WHITE' $BackgroundColor
 * @property int $BackgroundOpacity
 * @property InputLocation $Font
 * @property 'BLACK'|'BLUE'|'GREEN'|'RED'|'WHITE'|'YELLOW' $FontColor
 * @property int $FontOpacity
 * @property int $FontResolution
 * @property string $FontSize
 * @property 'BLACK'|'BLUE'|'GREEN'|'RED'|'WHITE'|'YELLOW' $OutlineColor
 * @property int $OutlineSize
 * @property 'BLACK'|'NONE'|'WHITE' $ShadowColor
 * @property int $ShadowOpacity
 * @property int $ShadowXOffset
 * @property int $ShadowYOffset
 * @property 'FIXED'|'SCALED' $TeletextGridControl
 * @property int $XPosition
 * @property int $YPosition
 */
class BurnInDestinationSettings extends Shape
{
    /**
     * @param array{
     *     Alignment?: 'CENTERED'|'LEFT'|'SMART',
     *     BackgroundColor?: 'BLACK'|'NONE'|'WHITE',
     *     BackgroundOpacity?: int,
     *     Font?: InputLocation,
     *     FontColor?: 'BLACK'|'BLUE'|'GREEN'|'RED'|'WHITE'|'YELLOW',
     *     FontOpacity?: int,
     *     FontResolution?: int,
     *     FontSize?: string,
     *     OutlineColor?: 'BLACK'|'BLUE'|'GREEN'|'RED'|'WHITE'|'YELLOW',
     *     OutlineSize?: int,
     *     ShadowColor?: 'BLACK'|'NONE'|'WHITE',
     *     ShadowOpacity?: int,
     *     ShadowXOffset?: int,
     *     ShadowYOffset?: int,
     *     TeletextGridControl?: 'FIXED'|'SCALED',
     *     XPosition?: int,
     *     YPosition?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
