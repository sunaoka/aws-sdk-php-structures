<?php

namespace Sunaoka\Aws\Structures\MediaConvert\GetJobTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'NONE'|'BLACK'|'WHITE'|'AUTO'|null $BackgroundColor
 * @property int<0, 255>|null $BackgroundOpacity
 * @property 'WHITE'|'BLACK'|'YELLOW'|'RED'|'GREEN'|'BLUE'|'AUTO'|null $FontColor
 * @property int<0, 255>|null $FontOpacity
 * @property int<0, 96>|null $FontSize
 * @property 'NORMAL'|'ITALIC'|null $FontStyle
 * @property 'NORMAL'|'BOLD'|null $FontWeight
 * @property 'ENABLED'|'DISABLED'|null $StylePassthrough
 * @property 'NONE'|'UNDERLINE'|null $TextDecoration
 */
class TtmlDestinationSettings extends Shape
{
    /**
     * @param array{
     *     BackgroundColor?: 'NONE'|'BLACK'|'WHITE'|'AUTO'|null,
     *     BackgroundOpacity?: int<0, 255>|null,
     *     FontColor?: 'WHITE'|'BLACK'|'YELLOW'|'RED'|'GREEN'|'BLUE'|'AUTO'|null,
     *     FontOpacity?: int<0, 255>|null,
     *     FontSize?: int<0, 96>|null,
     *     FontStyle?: 'NORMAL'|'ITALIC'|null,
     *     FontWeight?: 'NORMAL'|'BOLD'|null,
     *     StylePassthrough?: 'ENABLED'|'DISABLED'|null,
     *     TextDecoration?: 'NONE'|'UNDERLINE'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
