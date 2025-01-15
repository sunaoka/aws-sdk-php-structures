<?php

namespace Sunaoka\Aws\Structures\MediaConvert\GetJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PRESET_AUDIO_1'|'PRESET_AUDIO_2'|'PRESET_AUDIO_3'|'SHARED'|'UNENCRYPTED'|null $SpekeAudioPreset
 * @property 'PRESET_VIDEO_1'|'PRESET_VIDEO_2'|'PRESET_VIDEO_3'|'PRESET_VIDEO_4'|'PRESET_VIDEO_5'|'PRESET_VIDEO_6'|'PRESET_VIDEO_7'|'PRESET_VIDEO_8'|'SHARED'|'UNENCRYPTED'|null $SpekeVideoPreset
 */
class EncryptionContractConfiguration extends Shape
{
    /**
     * @param array{
     *     SpekeAudioPreset?: 'PRESET_AUDIO_1'|'PRESET_AUDIO_2'|'PRESET_AUDIO_3'|'SHARED'|'UNENCRYPTED'|null,
     *     SpekeVideoPreset?: 'PRESET_VIDEO_1'|'PRESET_VIDEO_2'|'PRESET_VIDEO_3'|'PRESET_VIDEO_4'|'PRESET_VIDEO_5'|'PRESET_VIDEO_6'|'PRESET_VIDEO_7'|'PRESET_VIDEO_8'|'SHARED'|'UNENCRYPTED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
