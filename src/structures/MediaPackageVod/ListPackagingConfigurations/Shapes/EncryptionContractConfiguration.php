<?php

namespace Sunaoka\Aws\Structures\MediaPackageVod\ListPackagingConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PRESET-AUDIO-1'|'PRESET-AUDIO-2'|'PRESET-AUDIO-3'|'SHARED'|'UNENCRYPTED' $PresetSpeke20Audio
 * @property 'PRESET-VIDEO-1'|'PRESET-VIDEO-2'|'PRESET-VIDEO-3'|'PRESET-VIDEO-4'|'PRESET-VIDEO-5'|'PRESET-VIDEO-6'|'PRESET-VIDEO-7'|'PRESET-VIDEO-8'|'SHARED'|'UNENCRYPTED' $PresetSpeke20Video
 */
class EncryptionContractConfiguration extends Shape
{
    /**
     * @param array{
     *     PresetSpeke20Audio: 'PRESET-AUDIO-1'|'PRESET-AUDIO-2'|'PRESET-AUDIO-3'|'SHARED'|'UNENCRYPTED',
     *     PresetSpeke20Video: 'PRESET-VIDEO-1'|'PRESET-VIDEO-2'|'PRESET-VIDEO-3'|'PRESET-VIDEO-4'|'PRESET-VIDEO-5'|'PRESET-VIDEO-6'|'PRESET-VIDEO-7'|'PRESET-VIDEO-8'|'SHARED'|'UNENCRYPTED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
