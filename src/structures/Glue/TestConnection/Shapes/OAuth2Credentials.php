<?php

namespace Sunaoka\Aws\Structures\Glue\TestConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $UserManagedClientApplicationClientSecret
 * @property string $AccessToken
 * @property string $RefreshToken
 * @property string $JwtToken
 */
class OAuth2Credentials extends Shape
{
    /**
     * @param array{
     *     UserManagedClientApplicationClientSecret?: string,
     *     AccessToken?: string,
     *     RefreshToken?: string,
     *     JwtToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
