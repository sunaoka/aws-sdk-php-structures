<?php

namespace Sunaoka\Aws\Structures\AmplifyBackend\UpdateBackendAuth\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ON'|'OFF'|'OPTIONAL'|null $MFAMode
 * @property Settings|null $Settings
 */
class UpdateBackendAuthMFAConfig extends Shape
{
    /**
     * @param array{
     *     MFAMode?: 'ON'|'OFF'|'OPTIONAL'|null,
     *     Settings?: Settings|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
