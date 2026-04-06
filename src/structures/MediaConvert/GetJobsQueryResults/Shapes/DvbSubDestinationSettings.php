<?php

namespace Sunaoka\Aws\Structures\MediaConvert\GetJobsQueryResults\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CENTERED'|'LEFT'|'AUTO'|null $Alignment
 * @property 'WHITE_TEXT_ONLY'|'ALL_TEXT'|null $ApplyFontColor
 * @property 'NONE'|'BLACK'|'WHITE'|'AUTO'|null $BackgroundColor
 * @property int<0, 255>|null $BackgroundOpacity
 * @property 'NONE'|'SPECIFIED'|'NO_DISPLAY_WINDOW'|'SPECIFIED_OPTIMAL'|null $DdsHandling
 * @property int<0, 2147483647>|null $DdsXCoordinate
 * @property int<0, 2147483647>|null $DdsYCoordinate
 * @property 'BEST_MATCH'|'MONOSPACED_SANSSERIF'|'MONOSPACED_SERIF'|'PROPORTIONAL_SANSSERIF'|'PROPORTIONAL_SERIF'|null $FallbackFont
 * @property 'WHITE'|'BLACK'|'YELLOW'|'RED'|'GREEN'|'BLUE'|'HEX'|'AUTO'|null $FontColor
 * @property string|null $FontFileBold
 * @property string|null $FontFileBoldItalic
 * @property string|null $FontFileItalic
 * @property string|null $FontFileRegular
 * @property int<0, 255>|null $FontOpacity
 * @property int<96, 600>|null $FontResolution
 * @property 'AUTOMATIC'|'HANS'|'HANT'|null $FontScript
 * @property int<0, 96>|null $FontSize
 * @property int<1, 2147483647>|null $Height
 * @property string|null $HexFontColor
 * @property 'BLACK'|'WHITE'|'YELLOW'|'RED'|'GREEN'|'BLUE'|'AUTO'|null $OutlineColor
 * @property int<0, 10>|null $OutlineSize
 * @property 'NONE'|'BLACK'|'WHITE'|'AUTO'|null $ShadowColor
 * @property int<0, 255>|null $ShadowOpacity
 * @property int<-2147483648, 2147483647>|null $ShadowXOffset
 * @property int<-2147483648, 2147483647>|null $ShadowYOffset
 * @property 'ENABLED'|'DISABLED'|null $StylePassthrough
 * @property 'HEARING_IMPAIRED'|'STANDARD'|null $SubtitlingType
 * @property 'FIXED_GRID'|'PROPORTIONAL'|'AUTO'|null $TeletextSpacing
 * @property int<1, 2147483647>|null $Width
 * @property int<0, 2147483647>|null $XPosition
 * @property int<0, 2147483647>|null $YPosition
 */
class DvbSubDestinationSettings extends Shape
{
    /**
     * @param array{
     *     Alignment?: 'CENTERED'|'LEFT'|'AUTO'|null,
     *     ApplyFontColor?: 'WHITE_TEXT_ONLY'|'ALL_TEXT'|null,
     *     BackgroundColor?: 'NONE'|'BLACK'|'WHITE'|'AUTO'|null,
     *     BackgroundOpacity?: int<0, 255>|null,
     *     DdsHandling?: 'NONE'|'SPECIFIED'|'NO_DISPLAY_WINDOW'|'SPECIFIED_OPTIMAL'|null,
     *     DdsXCoordinate?: int<0, 2147483647>|null,
     *     DdsYCoordinate?: int<0, 2147483647>|null,
     *     FallbackFont?: 'BEST_MATCH'|'MONOSPACED_SANSSERIF'|'MONOSPACED_SERIF'|'PROPORTIONAL_SANSSERIF'|'PROPORTIONAL_SERIF'|null,
     *     FontColor?: 'WHITE'|'BLACK'|'YELLOW'|'RED'|'GREEN'|'BLUE'|'HEX'|'AUTO'|null,
     *     FontFileBold?: string|null,
     *     FontFileBoldItalic?: string|null,
     *     FontFileItalic?: string|null,
     *     FontFileRegular?: string|null,
     *     FontOpacity?: int<0, 255>|null,
     *     FontResolution?: int<96, 600>|null,
     *     FontScript?: 'AUTOMATIC'|'HANS'|'HANT'|null,
     *     FontSize?: int<0, 96>|null,
     *     Height?: int<1, 2147483647>|null,
     *     HexFontColor?: string|null,
     *     OutlineColor?: 'BLACK'|'WHITE'|'YELLOW'|'RED'|'GREEN'|'BLUE'|'AUTO'|null,
     *     OutlineSize?: int<0, 10>|null,
     *     ShadowColor?: 'NONE'|'BLACK'|'WHITE'|'AUTO'|null,
     *     ShadowOpacity?: int<0, 255>|null,
     *     ShadowXOffset?: int<-2147483648, 2147483647>|null,
     *     ShadowYOffset?: int<-2147483648, 2147483647>|null,
     *     StylePassthrough?: 'ENABLED'|'DISABLED'|null,
     *     SubtitlingType?: 'HEARING_IMPAIRED'|'STANDARD'|null,
     *     TeletextSpacing?: 'FIXED_GRID'|'PROPORTIONAL'|'AUTO'|null,
     *     Width?: int<1, 2147483647>|null,
     *     XPosition?: int<0, 2147483647>|null,
     *     YPosition?: int<0, 2147483647>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
