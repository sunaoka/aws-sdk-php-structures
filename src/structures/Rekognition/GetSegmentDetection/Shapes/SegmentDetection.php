<?php

namespace Sunaoka\Aws\Structures\Rekognition\GetSegmentDetection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'TECHNICAL_CUE'|'SHOT' $Type
 * @property int $StartTimestampMillis
 * @property int $EndTimestampMillis
 * @property int<0, max> $DurationMillis
 * @property string $StartTimecodeSMPTE
 * @property string $EndTimecodeSMPTE
 * @property string $DurationSMPTE
 * @property TechnicalCueSegment $TechnicalCueSegment
 * @property ShotSegment $ShotSegment
 * @property int<0, max> $StartFrameNumber
 * @property int<0, max> $EndFrameNumber
 * @property int<0, max> $DurationFrames
 */
class SegmentDetection extends Shape
{
    /**
     * @param array{
     *     Type?: 'TECHNICAL_CUE'|'SHOT',
     *     StartTimestampMillis?: int,
     *     EndTimestampMillis?: int,
     *     DurationMillis?: int<0, max>,
     *     StartTimecodeSMPTE?: string,
     *     EndTimecodeSMPTE?: string,
     *     DurationSMPTE?: string,
     *     TechnicalCueSegment?: TechnicalCueSegment,
     *     ShotSegment?: ShotSegment,
     *     StartFrameNumber?: int<0, max>,
     *     EndFrameNumber?: int<0, max>,
     *     DurationFrames?: int<0, max>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
