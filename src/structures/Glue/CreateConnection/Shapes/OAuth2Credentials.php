<?php

namespace Sunaoka\Aws\Structures\Glue\CreateConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $UserManagedClientApplicationClientSecret
 * @property string|null $AccessToken
 * @property string|null $RefreshToken
 * @property string|null $JwtToken
 */
class OAuth2Credentials extends Shape
{
    /**
     * @param array{
     *     UserManagedClientApplicationClientSecret?: string|null,
     *     AccessToken?: string|null,
     *     RefreshToken?: string|null,
     *     JwtToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
