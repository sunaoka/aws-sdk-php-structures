<?php

namespace Sunaoka\Aws\Structures\MediaConvert\ListPresets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'NONE'|'AUTO'|'FIXED'|null $AfdSignaling
 * @property 'DISABLED'|'ENABLED'|null $AntiAlias
 * @property VideoCodecSettings|null $CodecSettings
 * @property 'IGNORE'|'INSERT'|null $ColorMetadata
 * @property Rectangle|null $Crop
 * @property 'DISABLED'|'ENABLED'|null $DropFrameTimecode
 * @property int<0, 15>|null $FixedAfd
 * @property int<32, 8192>|null $Height
 * @property Rectangle|null $Position
 * @property 'NONE'|'RESPOND'|'PASSTHROUGH'|null $RespondToAfd
 * @property 'DEFAULT'|'STRETCH_TO_OUTPUT'|'FIT'|'FIT_NO_UPSCALE'|'FILL'|null $ScalingBehavior
 * @property int<0, 100>|null $Sharpness
 * @property 'DISABLED'|'PIC_TIMING_SEI'|null $TimecodeInsertion
 * @property 'DISABLED'|'ENABLED'|null $TimecodeTrack
 * @property VideoPreprocessor|null $VideoPreprocessors
 * @property int<32, 8192>|null $Width
 */
class VideoDescription extends Shape
{
    /**
     * @param array{
     *     AfdSignaling?: 'NONE'|'AUTO'|'FIXED'|null,
     *     AntiAlias?: 'DISABLED'|'ENABLED'|null,
     *     CodecSettings?: VideoCodecSettings|null,
     *     ColorMetadata?: 'IGNORE'|'INSERT'|null,
     *     Crop?: Rectangle|null,
     *     DropFrameTimecode?: 'DISABLED'|'ENABLED'|null,
     *     FixedAfd?: int<0, 15>|null,
     *     Height?: int<32, 8192>|null,
     *     Position?: Rectangle|null,
     *     RespondToAfd?: 'NONE'|'RESPOND'|'PASSTHROUGH'|null,
     *     ScalingBehavior?: 'DEFAULT'|'STRETCH_TO_OUTPUT'|'FIT'|'FIT_NO_UPSCALE'|'FILL'|null,
     *     Sharpness?: int<0, 100>|null,
     *     TimecodeInsertion?: 'DISABLED'|'PIC_TIMING_SEI'|null,
     *     TimecodeTrack?: 'DISABLED'|'ENABLED'|null,
     *     VideoPreprocessors?: VideoPreprocessor|null,
     *     Width?: int<32, 8192>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
