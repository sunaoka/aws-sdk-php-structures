<?php

namespace Sunaoka\Aws\Structures\MediaConvert\GetJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CENTERED'|'LEFT'|'AUTO' $Alignment
 * @property 'WHITE_TEXT_ONLY'|'ALL_TEXT' $ApplyFontColor
 * @property 'NONE'|'BLACK'|'WHITE'|'AUTO' $BackgroundColor
 * @property int $BackgroundOpacity
 * @property 'NONE'|'SPECIFIED'|'NO_DISPLAY_WINDOW' $DdsHandling
 * @property int $DdsXCoordinate
 * @property int $DdsYCoordinate
 * @property 'BEST_MATCH'|'MONOSPACED_SANSSERIF'|'MONOSPACED_SERIF'|'PROPORTIONAL_SANSSERIF'|'PROPORTIONAL_SERIF' $FallbackFont
 * @property 'WHITE'|'BLACK'|'YELLOW'|'RED'|'GREEN'|'BLUE'|'HEX'|'AUTO' $FontColor
 * @property string $FontFileBold
 * @property string $FontFileBoldItalic
 * @property string $FontFileItalic
 * @property string $FontFileRegular
 * @property int $FontOpacity
 * @property int $FontResolution
 * @property 'AUTOMATIC'|'HANS'|'HANT' $FontScript
 * @property int $FontSize
 * @property int $Height
 * @property string $HexFontColor
 * @property 'BLACK'|'WHITE'|'YELLOW'|'RED'|'GREEN'|'BLUE'|'AUTO' $OutlineColor
 * @property int $OutlineSize
 * @property 'NONE'|'BLACK'|'WHITE'|'AUTO' $ShadowColor
 * @property int $ShadowOpacity
 * @property int $ShadowXOffset
 * @property int $ShadowYOffset
 * @property 'ENABLED'|'DISABLED' $StylePassthrough
 * @property 'HEARING_IMPAIRED'|'STANDARD' $SubtitlingType
 * @property 'FIXED_GRID'|'PROPORTIONAL'|'AUTO' $TeletextSpacing
 * @property int $Width
 * @property int $XPosition
 * @property int $YPosition
 */
class DvbSubDestinationSettings extends Shape
{
    /**
     * @param array{
     *     Alignment?: 'CENTERED'|'LEFT'|'AUTO',
     *     ApplyFontColor?: 'WHITE_TEXT_ONLY'|'ALL_TEXT',
     *     BackgroundColor?: 'NONE'|'BLACK'|'WHITE'|'AUTO',
     *     BackgroundOpacity?: int,
     *     DdsHandling?: 'NONE'|'SPECIFIED'|'NO_DISPLAY_WINDOW',
     *     DdsXCoordinate?: int,
     *     DdsYCoordinate?: int,
     *     FallbackFont?: 'BEST_MATCH'|'MONOSPACED_SANSSERIF'|'MONOSPACED_SERIF'|'PROPORTIONAL_SANSSERIF'|'PROPORTIONAL_SERIF',
     *     FontColor?: 'WHITE'|'BLACK'|'YELLOW'|'RED'|'GREEN'|'BLUE'|'HEX'|'AUTO',
     *     FontFileBold?: string,
     *     FontFileBoldItalic?: string,
     *     FontFileItalic?: string,
     *     FontFileRegular?: string,
     *     FontOpacity?: int,
     *     FontResolution?: int,
     *     FontScript?: 'AUTOMATIC'|'HANS'|'HANT',
     *     FontSize?: int,
     *     Height?: int,
     *     HexFontColor?: string,
     *     OutlineColor?: 'BLACK'|'WHITE'|'YELLOW'|'RED'|'GREEN'|'BLUE'|'AUTO',
     *     OutlineSize?: int,
     *     ShadowColor?: 'NONE'|'BLACK'|'WHITE'|'AUTO',
     *     ShadowOpacity?: int,
     *     ShadowXOffset?: int,
     *     ShadowYOffset?: int,
     *     StylePassthrough?: 'ENABLED'|'DISABLED',
     *     SubtitlingType?: 'HEARING_IMPAIRED'|'STANDARD',
     *     TeletextSpacing?: 'FIXED_GRID'|'PROPORTIONAL'|'AUTO',
     *     Width?: int,
     *     XPosition?: int,
     *     YPosition?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
