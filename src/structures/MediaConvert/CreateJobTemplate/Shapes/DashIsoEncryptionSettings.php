<?php

namespace Sunaoka\Aws\Structures\MediaConvert\CreateJobTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CENC_V1'|'UNENCRYPTED_SEI' $PlaybackDeviceCompatibility
 * @property SpekeKeyProvider $SpekeKeyProvider
 */
class DashIsoEncryptionSettings extends Shape
{
    /**
     * @param array{
     *     PlaybackDeviceCompatibility?: 'CENC_V1'|'UNENCRYPTED_SEI',
     *     SpekeKeyProvider?: SpekeKeyProvider
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
