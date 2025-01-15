<?php

namespace Sunaoka\Aws\Structures\AmplifyBackend\UpdateBackendAuth\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ClientId
 * @property string|null $KeyId
 * @property string|null $PrivateKey
 * @property string|null $TeamId
 */
class BackendAuthAppleProviderConfig extends Shape
{
    /**
     * @param array{
     *     ClientId?: string|null,
     *     KeyId?: string|null,
     *     PrivateKey?: string|null,
     *     TeamId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
