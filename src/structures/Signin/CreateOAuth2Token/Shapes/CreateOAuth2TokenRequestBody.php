<?php

namespace Sunaoka\Aws\Structures\Signin\CreateOAuth2Token\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $clientId
 * @property string $grantType
 * @property string|null $code
 * @property string|null $redirectUri
 * @property string|null $codeVerifier
 * @property string|null $refreshToken
 */
class CreateOAuth2TokenRequestBody extends Shape
{
    /**
     * @param array{
     *     clientId: string,
     *     grantType: string,
     *     code?: string|null,
     *     redirectUri?: string|null,
     *     codeVerifier?: string|null,
     *     refreshToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
