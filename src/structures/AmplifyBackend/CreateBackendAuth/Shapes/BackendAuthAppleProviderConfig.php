<?php

namespace Sunaoka\Aws\Structures\AmplifyBackend\CreateBackendAuth\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ClientId
 * @property string $KeyId
 * @property string $PrivateKey
 * @property string $TeamId
 */
class BackendAuthAppleProviderConfig extends Shape
{
    /**
     * @param array{
     *     ClientId?: string,
     *     KeyId?: string,
     *     PrivateKey?: string,
     *     TeamId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
