<?php

namespace Sunaoka\Aws\Structures\AmplifyBackend\GetBackendAuth\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ON'|'OFF'|'OPTIONAL' $MFAMode
 * @property Settings $Settings
 */
class CreateBackendAuthMFAConfig extends Shape
{
    /**
     * @param array{
     *     MFAMode: 'ON'|'OFF'|'OPTIONAL',
     *     Settings?: Settings
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
