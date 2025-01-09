<?php

namespace Sunaoka\Aws\Structures\MediaConvert\UpdatePreset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'NONE'|'AUTO'|'FIXED' $AfdSignaling
 * @property 'DISABLED'|'ENABLED' $AntiAlias
 * @property VideoCodecSettings $CodecSettings
 * @property 'IGNORE'|'INSERT' $ColorMetadata
 * @property Rectangle $Crop
 * @property 'DISABLED'|'ENABLED' $DropFrameTimecode
 * @property int<0, 15> $FixedAfd
 * @property int<32, 8192> $Height
 * @property Rectangle $Position
 * @property 'NONE'|'RESPOND'|'PASSTHROUGH' $RespondToAfd
 * @property 'DEFAULT'|'STRETCH_TO_OUTPUT'|'FIT'|'FIT_NO_UPSCALE'|'FILL' $ScalingBehavior
 * @property int<0, 100> $Sharpness
 * @property 'DISABLED'|'PIC_TIMING_SEI' $TimecodeInsertion
 * @property 'DISABLED'|'ENABLED' $TimecodeTrack
 * @property VideoPreprocessor $VideoPreprocessors
 * @property int<32, 8192> $Width
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
     *     FixedAfd?: int<0, 15>,
     *     Height?: int<32, 8192>,
     *     Position?: Rectangle,
     *     RespondToAfd?: 'NONE'|'RESPOND'|'PASSTHROUGH',
     *     ScalingBehavior?: 'DEFAULT'|'STRETCH_TO_OUTPUT'|'FIT'|'FIT_NO_UPSCALE'|'FILL',
     *     Sharpness?: int<0, 100>,
     *     TimecodeInsertion?: 'DISABLED'|'PIC_TIMING_SEI',
     *     TimecodeTrack?: 'DISABLED'|'ENABLED',
     *     VideoPreprocessors?: VideoPreprocessor,
     *     Width?: int<32, 8192>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
