<?php

namespace Sunaoka\Aws\Structures\Connect\GetFederationToken\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AccessToken
 * @property \Aws\Api\DateTimeResult $AccessTokenExpiration
 * @property string $RefreshToken
 * @property \Aws\Api\DateTimeResult $RefreshTokenExpiration
 */
class Credentials extends Shape
{
    /**
     * @param array{
     *     AccessToken?: string,
     *     AccessTokenExpiration?: \Aws\Api\DateTimeResult,
     *     RefreshToken?: string,
     *     RefreshTokenExpiration?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
