<?php

namespace Sunaoka\Aws\Structures\DataZone\UpdateConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $accessToken
 * @property string|null $jwtToken
 * @property string|null $refreshToken
 * @property string|null $userManagedClientApplicationClientSecret
 */
class GlueOAuth2Credentials extends Shape
{
    /**
     * @param array{
     *     accessToken?: string|null,
     *     jwtToken?: string|null,
     *     refreshToken?: string|null,
     *     userManagedClientApplicationClientSecret?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
