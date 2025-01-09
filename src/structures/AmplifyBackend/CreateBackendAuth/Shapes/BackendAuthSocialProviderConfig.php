<?php

namespace Sunaoka\Aws\Structures\AmplifyBackend\CreateBackendAuth\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ClientId
 * @property string $ClientSecret
 */
class BackendAuthSocialProviderConfig extends Shape
{
    /**
     * @param array{
     *     ClientId?: string,
     *     ClientSecret?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
