<?php

namespace Sunaoka\Aws\Structures\MediaPackageV2\GetOriginEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PRESET_AUDIO_1'|'PRESET_AUDIO_2'|'PRESET_AUDIO_3'|'SHARED'|'UNENCRYPTED' $PresetSpeke20Audio
 * @property 'PRESET_VIDEO_1'|'PRESET_VIDEO_2'|'PRESET_VIDEO_3'|'PRESET_VIDEO_4'|'PRESET_VIDEO_5'|'PRESET_VIDEO_6'|'PRESET_VIDEO_7'|'PRESET_VIDEO_8'|'SHARED'|'UNENCRYPTED' $PresetSpeke20Video
 */
class EncryptionContractConfiguration extends Shape
{
    /**
     * @param array{
     *     PresetSpeke20Audio: 'PRESET_AUDIO_1'|'PRESET_AUDIO_2'|'PRESET_AUDIO_3'|'SHARED'|'UNENCRYPTED',
     *     PresetSpeke20Video: 'PRESET_VIDEO_1'|'PRESET_VIDEO_2'|'PRESET_VIDEO_3'|'PRESET_VIDEO_4'|'PRESET_VIDEO_5'|'PRESET_VIDEO_6'|'PRESET_VIDEO_7'|'PRESET_VIDEO_8'|'SHARED'|'UNENCRYPTED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
