<?php

namespace Sunaoka\Aws\Structures\MediaConvert\GetJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'NONE'|'AUTO'|'FIXED' $AfdSignaling
 * @property 'DISABLED'|'ENABLED' $AntiAlias
 * @property VideoCodecSettings $CodecSettings
 * @property 'IGNORE'|'INSERT' $ColorMetadata
 * @property Rectangle $Crop
 * @property 'DISABLED'|'ENABLED' $DropFrameTimecode
 * @property int $FixedAfd
 * @property int $Height
 * @property Rectangle $Position
 * @property 'NONE'|'RESPOND'|'PASSTHROUGH' $RespondToAfd
 * @property 'DEFAULT'|'STRETCH_TO_OUTPUT'|'FIT'|'FIT_NO_UPSCALE'|'FILL' $ScalingBehavior
 * @property int $Sharpness
 * @property 'DISABLED'|'PIC_TIMING_SEI' $TimecodeInsertion
 * @property 'DISABLED'|'ENABLED' $TimecodeTrack
 * @property VideoPreprocessor $VideoPreprocessors
 * @property int $Width
 */
class VideoDescription extends Shape
{
    /**
     * @param array{
     *     AfdSignaling?: 'NONE'|'AUTO'|'FIXED',
     *     AntiAlias?: 'DISABLED'|'ENABLED',
     *     CodecSettings?: VideoCodecSettings,
     *     ColorMetadata?: 'IGNORE'|'INSERT',
     *     Crop?: Rectangle,
     *     DropFrameTimecode?: 'DISABLED'|'ENABLED',
     *     FixedAfd?: int,
     *     Height?: int,
     *     Position?: Rectangle,
     *     RespondToAfd?: 'NONE'|'RESPOND'|'PASSTHROUGH',
     *     ScalingBehavior?: 'DEFAULT'|'STRETCH_TO_OUTPUT'|'FIT'|'FIT_NO_UPSCALE'|'FILL',
     *     Sharpness?: int,
     *     TimecodeInsertion?: 'DISABLED'|'PIC_TIMING_SEI',
     *     TimecodeTrack?: 'DISABLED'|'ENABLED',
     *     VideoPreprocessors?: VideoPreprocessor,
     *     Width?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
