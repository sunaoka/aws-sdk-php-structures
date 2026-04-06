<?php

namespace Sunaoka\Aws\Structures\MediaLive\DescribeChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AUTO'|'HIGH'|'LOW'|'MEDIUM'|'OFF'|null $AdaptiveQuantization
 * @property 'AUTO'|'FIXED'|'NONE'|null $AfdSignaling
 * @property 'IGNORE'|'INSERT'|null $ColorMetadata
 * @property 'AUTO'|'PASSTHROUGH'|null $ColorSpace
 * @property 'DISPLAYRATIO16X9'|'DISPLAYRATIO4X3'|null $DisplayAspectRatio
 * @property Mpeg2FilterSettings|null $FilterSettings
 * @property 'AFD_0000'|'AFD_0010'|'AFD_0011'|'AFD_0100'|'AFD_1000'|'AFD_1001'|'AFD_1010'|'AFD_1011'|'AFD_1101'|'AFD_1110'|'AFD_1111'|null $FixedAfd
 * @property int<1, max> $FramerateDenominator
 * @property int<1, max> $FramerateNumerator
 * @property int<0, max>|null $GopClosedCadence
 * @property int<0, 7>|null $GopNumBFrames
 * @property double|null $GopSize
 * @property 'FRAMES'|'SECONDS'|null $GopSizeUnits
 * @property 'INTERLACED'|'PROGRESSIVE'|null $ScanType
 * @property 'DYNAMIC'|'FIXED'|null $SubgopLength
 * @property 'DISABLED'|'GOP_TIMECODE'|null $TimecodeInsertion
 * @property TimecodeBurninSettings|null $TimecodeBurninSettings
 */
class Mpeg2Settings extends Shape
{
    /**
     * @param array{
     *     AdaptiveQuantization?: 'AUTO'|'HIGH'|'LOW'|'MEDIUM'|'OFF'|null,
     *     AfdSignaling?: 'AUTO'|'FIXED'|'NONE'|null,
     *     ColorMetadata?: 'IGNORE'|'INSERT'|null,
     *     ColorSpace?: 'AUTO'|'PASSTHROUGH'|null,
     *     DisplayAspectRatio?: 'DISPLAYRATIO16X9'|'DISPLAYRATIO4X3'|null,
     *     FilterSettings?: Mpeg2FilterSettings|null,
     *     FixedAfd?: 'AFD_0000'|'AFD_0010'|'AFD_0011'|'AFD_0100'|'AFD_1000'|'AFD_1001'|'AFD_1010'|'AFD_1011'|'AFD_1101'|'AFD_1110'|'AFD_1111'|null,
     *     FramerateDenominator: int<1, max>,
     *     FramerateNumerator: int<1, max>,
     *     GopClosedCadence?: int<0, max>|null,
     *     GopNumBFrames?: int<0, 7>|null,
     *     GopSize?: double|null,
     *     GopSizeUnits?: 'FRAMES'|'SECONDS'|null,
     *     ScanType?: 'INTERLACED'|'PROGRESSIVE'|null,
     *     SubgopLength?: 'DYNAMIC'|'FIXED'|null,
     *     TimecodeInsertion?: 'DISABLED'|'GOP_TIMECODE'|null,
     *     TimecodeBurninSettings?: TimecodeBurninSettings|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
