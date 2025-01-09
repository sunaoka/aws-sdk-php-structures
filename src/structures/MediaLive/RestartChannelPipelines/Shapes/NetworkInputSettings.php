<?php

namespace Sunaoka\Aws\Structures\MediaLive\RestartChannelPipelines\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property HlsInputSettings $HlsInputSettings
 * @property 'CHECK_CRYPTOGRAPHY_AND_VALIDATE_NAME'|'CHECK_CRYPTOGRAPHY_ONLY' $ServerValidation
 * @property MulticastInputSettings $MulticastInputSettings
 */
class NetworkInputSettings extends Shape
{
    /**
     * @param array{
     *     HlsInputSettings?: HlsInputSettings,
     *     ServerValidation?: 'CHECK_CRYPTOGRAPHY_AND_VALIDATE_NAME'|'CHECK_CRYPTOGRAPHY_ONLY',
     *     MulticastInputSettings?: MulticastInputSettings
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
