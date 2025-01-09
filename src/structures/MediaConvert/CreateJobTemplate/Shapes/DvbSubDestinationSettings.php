<?php

namespace Sunaoka\Aws\Structures\MediaConvert\CreateJobTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CENTERED'|'LEFT'|'AUTO' $Alignment
 * @property 'WHITE_TEXT_ONLY'|'ALL_TEXT' $ApplyFontColor
 * @property 'NONE'|'BLACK'|'WHITE'|'AUTO' $BackgroundColor
 * @property int<0, 255> $BackgroundOpacity
 * @property 'NONE'|'SPECIFIED'|'NO_DISPLAY_WINDOW' $DdsHandling
 * @property int<0, 2147483647> $DdsXCoordinate
 * @property int<0, 2147483647> $DdsYCoordinate
 * @property 'BEST_MATCH'|'MONOSPACED_SANSSERIF'|'MONOSPACED_SERIF'|'PROPORTIONAL_SANSSERIF'|'PROPORTIONAL_SERIF' $FallbackFont
 * @property 'WHITE'|'BLACK'|'YELLOW'|'RED'|'GREEN'|'BLUE'|'HEX'|'AUTO' $FontColor
 * @property string $FontFileBold
 * @property string $FontFileBoldItalic
 * @property string $FontFileItalic
 * @property string $FontFileRegular
 * @property int<0, 255> $FontOpacity
 * @property int<96, 600> $FontResolution
 * @property 'AUTOMATIC'|'HANS'|'HANT' $FontScript
 * @property int<0, 96> $FontSize
 * @property int<1, 2147483647> $Height
 * @property string $HexFontColor
 * @property 'BLACK'|'WHITE'|'YELLOW'|'RED'|'GREEN'|'BLUE'|'AUTO' $OutlineColor
 * @property int<0, 10> $OutlineSize
 * @property 'NONE'|'BLACK'|'WHITE'|'AUTO' $ShadowColor
 * @property int<0, 255> $ShadowOpacity
 * @property int<-2147483648, 2147483647> $ShadowXOffset
 * @property int<-2147483648, 2147483647> $ShadowYOffset
 * @property 'ENABLED'|'DISABLED' $StylePassthrough
 * @property 'HEARING_IMPAIRED'|'STANDARD' $SubtitlingType
 * @property 'FIXED_GRID'|'PROPORTIONAL'|'AUTO' $TeletextSpacing
 * @property int<1, 2147483647> $Width
 * @property int<0, 2147483647> $XPosition
 * @property int<0, 2147483647> $YPosition
 */
class DvbSubDestinationSettings extends Shape
{
    /**
     * @param array{
     *     Alignment?: 'CENTERED'|'LEFT'|'AUTO',
     *     ApplyFontColor?: 'WHITE_TEXT_ONLY'|'ALL_TEXT',
     *     BackgroundColor?: 'NONE'|'BLACK'|'WHITE'|'AUTO',
     *     BackgroundOpacity?: int<0, 255>,
     *     DdsHandling?: 'NONE'|'SPECIFIED'|'NO_DISPLAY_WINDOW',
     *     DdsXCoordinate?: int<0, 2147483647>,
     *     DdsYCoordinate?: int<0, 2147483647>,
     *     FallbackFont?: 'BEST_MATCH'|'MONOSPACED_SANSSERIF'|'MONOSPACED_SERIF'|'PROPORTIONAL_SANSSERIF'|'PROPORTIONAL_SERIF',
     *     FontColor?: 'WHITE'|'BLACK'|'YELLOW'|'RED'|'GREEN'|'BLUE'|'HEX'|'AUTO',
     *     FontFileBold?: string,
     *     FontFileBoldItalic?: string,
     *     FontFileItalic?: string,
     *     FontFileRegular?: string,
     *     FontOpacity?: int<0, 255>,
     *     FontResolution?: int<96, 600>,
     *     FontScript?: 'AUTOMATIC'|'HANS'|'HANT',
     *     FontSize?: int<0, 96>,
     *     Height?: int<1, 2147483647>,
     *     HexFontColor?: string,
     *     OutlineColor?: 'BLACK'|'WHITE'|'YELLOW'|'RED'|'GREEN'|'BLUE'|'AUTO',
     *     OutlineSize?: int<0, 10>,
     *     ShadowColor?: 'NONE'|'BLACK'|'WHITE'|'AUTO',
     *     ShadowOpacity?: int<0, 255>,
     *     ShadowXOffset?: int<-2147483648, 2147483647>,
     *     ShadowYOffset?: int<-2147483648, 2147483647>,
     *     StylePassthrough?: 'ENABLED'|'DISABLED',
     *     SubtitlingType?: 'HEARING_IMPAIRED'|'STANDARD',
     *     TeletextSpacing?: 'FIXED_GRID'|'PROPORTIONAL'|'AUTO',
     *     Width?: int<1, 2147483647>,
     *     XPosition?: int<0, 2147483647>,
     *     YPosition?: int<0, 2147483647>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
