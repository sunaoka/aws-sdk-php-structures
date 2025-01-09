<?php

namespace Sunaoka\Aws\Structures\AmplifyBackend\UpdateBackendAuth\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $UnauthenticatedLogin
 */
class UpdateBackendAuthIdentityPoolConfig extends Shape
{
    /**
     * @param array{UnauthenticatedLogin?: bool} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
