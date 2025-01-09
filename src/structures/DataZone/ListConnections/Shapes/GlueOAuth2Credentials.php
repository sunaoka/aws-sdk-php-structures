<?php

namespace Sunaoka\Aws\Structures\DataZone\ListConnections\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $accessToken
 * @property string $jwtToken
 * @property string $refreshToken
 * @property string $userManagedClientApplicationClientSecret
 */
class GlueOAuth2Credentials extends Shape
{
    /**
     * @param array{
     *     accessToken?: string,
     *     jwtToken?: string,
     *     refreshToken?: string,
     *     userManagedClientApplicationClientSecret?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
