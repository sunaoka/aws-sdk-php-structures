<?php

namespace Sunaoka\Aws\Structures\MediaConvert\GetJobTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CENC_V1'|'UNENCRYPTED_SEI'|null $PlaybackDeviceCompatibility
 * @property SpekeKeyProvider|null $SpekeKeyProvider
 */
class DashIsoEncryptionSettings extends Shape
{
    /**
     * @param array{
     *     PlaybackDeviceCompatibility?: 'CENC_V1'|'UNENCRYPTED_SEI'|null,
     *     SpekeKeyProvider?: SpekeKeyProvider|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
