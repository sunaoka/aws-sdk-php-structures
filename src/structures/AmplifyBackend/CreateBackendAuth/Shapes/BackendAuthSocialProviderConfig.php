<?php

namespace Sunaoka\Aws\Structures\AmplifyBackend\CreateBackendAuth\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ClientId
 * @property string|null $ClientSecret
 */
class BackendAuthSocialProviderConfig extends Shape
{
    /**
     * @param array{
     *     ClientId?: string|null,
     *     ClientSecret?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
