<?php

namespace Sunaoka\Aws\Structures\Connect\GetFederationToken\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AccessToken
 * @property \Aws\Api\DateTimeResult|null $AccessTokenExpiration
 * @property string|null $RefreshToken
 * @property \Aws\Api\DateTimeResult|null $RefreshTokenExpiration
 */
class Credentials extends Shape
{
    /**
     * @param array{
     *     AccessToken?: string|null,
     *     AccessTokenExpiration?: \Aws\Api\DateTimeResult|null,
     *     RefreshToken?: string|null,
     *     RefreshTokenExpiration?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
