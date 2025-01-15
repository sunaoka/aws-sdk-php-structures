<?php

namespace Sunaoka\Aws\Structures\AmplifyBackend\UpdateBackendAuth\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $UnauthenticatedLogin
 */
class UpdateBackendAuthIdentityPoolConfig extends Shape
{
    /**
     * @param array{UnauthenticatedLogin?: bool|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
