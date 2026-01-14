<?php

namespace Sunaoka\Aws\Structures\DataZone\ListConnections\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $userManagedClientApplicationClientSecret
 * @property string|null $accessToken
 * @property string|null $refreshToken
 * @property string|null $jwtToken
 */
class GlueOAuth2Credentials extends Shape
{
    /**
     * @param array{
     *     userManagedClientApplicationClientSecret?: string|null,
     *     accessToken?: string|null,
     *     refreshToken?: string|null,
     *     jwtToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
