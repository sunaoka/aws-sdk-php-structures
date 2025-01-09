<?php

namespace Sunaoka\Aws\Structures\Rekognition\GetSegmentDetection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'TECHNICAL_CUE'|'SHOT' $Type
 * @property int $StartTimestampMillis
 * @property int $EndTimestampMillis
 * @property int $DurationMillis
 * @property string $StartTimecodeSMPTE
 * @property string $EndTimecodeSMPTE
 * @property string $DurationSMPTE
 * @property TechnicalCueSegment $TechnicalCueSegment
 * @property ShotSegment $ShotSegment
 * @property int $StartFrameNumber
 * @property int $EndFrameNumber
 * @property int $DurationFrames
 */
class SegmentDetection extends Shape
{
    /**
     * @param array{
     *     Type?: 'TECHNICAL_CUE'|'SHOT',
     *     StartTimestampMillis?: int,
     *     EndTimestampMillis?: int,
     *     DurationMillis?: int,
     *     StartTimecodeSMPTE?: string,
     *     EndTimecodeSMPTE?: string,
     *     DurationSMPTE?: string,
     *     TechnicalCueSegment?: TechnicalCueSegment,
     *     ShotSegment?: ShotSegment,
     *     StartFrameNumber?: int,
     *     EndFrameNumber?: int,
     *     DurationFrames?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
