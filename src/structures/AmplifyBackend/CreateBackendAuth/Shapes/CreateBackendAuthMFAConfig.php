<?php

namespace Sunaoka\Aws\Structures\AmplifyBackend\CreateBackendAuth\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ON'|'OFF'|'OPTIONAL' $MFAMode
 * @property Settings|null $Settings
 */
class CreateBackendAuthMFAConfig extends Shape
{
    /**
     * @param array{
     *     MFAMode: 'ON'|'OFF'|'OPTIONAL',
     *     Settings?: Settings|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
