<?php

namespace Sunaoka\Aws\Structures\MediaConvert\ListPresets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CENTERED'|'LEFT'|'AUTO' $Alignment
 * @property 'WHITE_TEXT_ONLY'|'ALL_TEXT' $ApplyFontColor
 * @property 'NONE'|'BLACK'|'WHITE'|'AUTO' $BackgroundColor
 * @property int<0, 255> $BackgroundOpacity
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
 * @property string $HexFontColor
 * @property 'BLACK'|'WHITE'|'YELLOW'|'RED'|'GREEN'|'BLUE'|'AUTO' $OutlineColor
 * @property int<0, 10> $OutlineSize
 * @property 'DISABLED'|'ENABLED' $RemoveRubyReserveAttributes
 * @property 'NONE'|'BLACK'|'WHITE'|'AUTO' $ShadowColor
 * @property int<0, 255> $ShadowOpacity
 * @property int<-2147483648, 2147483647> $ShadowXOffset
 * @property int<-2147483648, 2147483647> $ShadowYOffset
 * @property 'ENABLED'|'DISABLED' $StylePassthrough
 * @property 'FIXED_GRID'|'PROPORTIONAL'|'AUTO' $TeletextSpacing
 * @property int<0, 2147483647> $XPosition
 * @property int<0, 2147483647> $YPosition
 */
class BurninDestinationSettings extends Shape
{
    /**
     * @param array{
     *     Alignment?: 'CENTERED'|'LEFT'|'AUTO',
     *     ApplyFontColor?: 'WHITE_TEXT_ONLY'|'ALL_TEXT',
     *     BackgroundColor?: 'NONE'|'BLACK'|'WHITE'|'AUTO',
     *     BackgroundOpacity?: int<0, 255>,
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
     *     HexFontColor?: string,
     *     OutlineColor?: 'BLACK'|'WHITE'|'YELLOW'|'RED'|'GREEN'|'BLUE'|'AUTO',
     *     OutlineSize?: int<0, 10>,
     *     RemoveRubyReserveAttributes?: 'DISABLED'|'ENABLED',
     *     ShadowColor?: 'NONE'|'BLACK'|'WHITE'|'AUTO',
     *     ShadowOpacity?: int<0, 255>,
     *     ShadowXOffset?: int<-2147483648, 2147483647>,
     *     ShadowYOffset?: int<-2147483648, 2147483647>,
     *     StylePassthrough?: 'ENABLED'|'DISABLED',
     *     TeletextSpacing?: 'FIXED_GRID'|'PROPORTIONAL'|'AUTO',
     *     XPosition?: int<0, 2147483647>,
     *     YPosition?: int<0, 2147483647>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
