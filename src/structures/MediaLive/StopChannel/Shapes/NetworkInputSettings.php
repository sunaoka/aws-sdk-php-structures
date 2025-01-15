<?php

namespace Sunaoka\Aws\Structures\MediaLive\StopChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property HlsInputSettings|null $HlsInputSettings
 * @property 'CHECK_CRYPTOGRAPHY_AND_VALIDATE_NAME'|'CHECK_CRYPTOGRAPHY_ONLY'|null $ServerValidation
 * @property MulticastInputSettings|null $MulticastInputSettings
 */
class NetworkInputSettings extends Shape
{
    /**
     * @param array{
     *     HlsInputSettings?: HlsInputSettings|null,
     *     ServerValidation?: 'CHECK_CRYPTOGRAPHY_AND_VALIDATE_NAME'|'CHECK_CRYPTOGRAPHY_ONLY'|null,
     *     MulticastInputSettings?: MulticastInputSettings|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
