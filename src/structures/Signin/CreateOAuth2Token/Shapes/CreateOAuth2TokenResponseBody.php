<?php

namespace Sunaoka\Aws\Structures\Signin\CreateOAuth2Token\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AccessToken $accessToken
 * @property string $tokenType
 * @property int<1, 900> $expiresIn
 * @property string $refreshToken
 * @property string|null $idToken
 */
class CreateOAuth2TokenResponseBody extends Shape
{
    /**
     * @param array{
     *     accessToken: AccessToken,
     *     tokenType: string,
     *     expiresIn: int<1, 900>,
     *     refreshToken: string,
     *     idToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
