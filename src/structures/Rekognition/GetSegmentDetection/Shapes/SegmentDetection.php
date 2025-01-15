<?php

namespace Sunaoka\Aws\Structures\Rekognition\GetSegmentDetection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'TECHNICAL_CUE'|'SHOT'|null $Type
 * @property int|null $StartTimestampMillis
 * @property int|null $EndTimestampMillis
 * @property int<0, max>|null $DurationMillis
 * @property string|null $StartTimecodeSMPTE
 * @property string|null $EndTimecodeSMPTE
 * @property string|null $DurationSMPTE
 * @property TechnicalCueSegment|null $TechnicalCueSegment
 * @property ShotSegment|null $ShotSegment
 * @property int<0, max>|null $StartFrameNumber
 * @property int<0, max>|null $EndFrameNumber
 * @property int<0, max>|null $DurationFrames
 */
class SegmentDetection extends Shape
{
    /**
     * @param array{
     *     Type?: 'TECHNICAL_CUE'|'SHOT'|null,
     *     StartTimestampMillis?: int|null,
     *     EndTimestampMillis?: int|null,
     *     DurationMillis?: int<0, max>|null,
     *     StartTimecodeSMPTE?: string|null,
     *     EndTimecodeSMPTE?: string|null,
     *     DurationSMPTE?: string|null,
     *     TechnicalCueSegment?: TechnicalCueSegment|null,
     *     ShotSegment?: ShotSegment|null,
     *     StartFrameNumber?: int<0, max>|null,
     *     EndFrameNumber?: int<0, max>|null,
     *     DurationFrames?: int<0, max>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
