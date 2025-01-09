<?php

namespace Sunaoka\Aws\Structures\MediaLive\StartChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AUTO'|'HIGH'|'LOW'|'MEDIUM'|'OFF' $AdaptiveQuantization
 * @property 'AUTO'|'FIXED'|'NONE' $AfdSignaling
 * @property 'IGNORE'|'INSERT' $ColorMetadata
 * @property 'AUTO'|'PASSTHROUGH' $ColorSpace
 * @property 'DISPLAYRATIO16X9'|'DISPLAYRATIO4X3' $DisplayAspectRatio
 * @property Mpeg2FilterSettings $FilterSettings
 * @property 'AFD_0000'|'AFD_0010'|'AFD_0011'|'AFD_0100'|'AFD_1000'|'AFD_1001'|'AFD_1010'|'AFD_1011'|'AFD_1101'|'AFD_1110'|'AFD_1111' $FixedAfd
 * @property int $FramerateDenominator
 * @property int $FramerateNumerator
 * @property int $GopClosedCadence
 * @property int $GopNumBFrames
 * @property double $GopSize
 * @property 'FRAMES'|'SECONDS' $GopSizeUnits
 * @property 'INTERLACED'|'PROGRESSIVE' $ScanType
 * @property 'DYNAMIC'|'FIXED' $SubgopLength
 * @property 'DISABLED'|'GOP_TIMECODE' $TimecodeInsertion
 * @property TimecodeBurninSettings $TimecodeBurninSettings
 */
class Mpeg2Settings extends Shape
{
    /**
     * @param array{
     *     AdaptiveQuantization?: 'AUTO'|'HIGH'|'LOW'|'MEDIUM'|'OFF',
     *     AfdSignaling?: 'AUTO'|'FIXED'|'NONE',
     *     ColorMetadata?: 'IGNORE'|'INSERT',
     *     ColorSpace?: 'AUTO'|'PASSTHROUGH',
     *     DisplayAspectRatio?: 'DISPLAYRATIO16X9'|'DISPLAYRATIO4X3',
     *     FilterSettings?: Mpeg2FilterSettings,
     *     FixedAfd?: 'AFD_0000'|'AFD_0010'|'AFD_0011'|'AFD_0100'|'AFD_1000'|'AFD_1001'|'AFD_1010'|'AFD_1011'|'AFD_1101'|'AFD_1110'|'AFD_1111',
     *     FramerateDenominator: int,
     *     FramerateNumerator: int,
     *     GopClosedCadence?: int,
     *     GopNumBFrames?: int,
     *     GopSize?: double,
     *     GopSizeUnits?: 'FRAMES'|'SECONDS',
     *     ScanType?: 'INTERLACED'|'PROGRESSIVE',
     *     SubgopLength?: 'DYNAMIC'|'FIXED',
     *     TimecodeInsertion?: 'DISABLED'|'GOP_TIMECODE',
     *     TimecodeBurninSettings?: TimecodeBurninSettings
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
