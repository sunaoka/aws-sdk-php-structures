<?php

namespace Sunaoka\Aws\Structures\AmplifyBackend\UpdateBackendAuth\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ON'|'OFF'|'OPTIONAL' $MFAMode
 * @property Settings $Settings
 */
class UpdateBackendAuthMFAConfig extends Shape
{
    /**
     * @param array{
     *     MFAMode?: 'ON'|'OFF'|'OPTIONAL',
     *     Settings?: Settings
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
