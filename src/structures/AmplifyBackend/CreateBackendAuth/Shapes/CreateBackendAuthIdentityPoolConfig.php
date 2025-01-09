<?php

namespace Sunaoka\Aws\Structures\AmplifyBackend\CreateBackendAuth\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $IdentityPoolName
 * @property bool $UnauthenticatedLogin
 */
class CreateBackendAuthIdentityPoolConfig extends Shape
{
    /**
     * @param array{
     *     IdentityPoolName: string,
     *     UnauthenticatedLogin: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
