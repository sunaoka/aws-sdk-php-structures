<?php

namespace Sunaoka\Aws\Structures\Wickr\GetOidcInfo\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $codeVerifier
 * @property string|null $codeChallenge
 * @property string|null $accessToken
 * @property string|null $idToken
 * @property string|null $refreshToken
 * @property string|null $tokenType
 * @property int|null $expiresIn
 */
class OidcTokenInfo extends Shape
{
    /**
     * @param array{
     *     codeVerifier?: string|null,
     *     codeChallenge?: string|null,
     *     accessToken?: string|null,
     *     idToken?: string|null,
     *     refreshToken?: string|null,
     *     tokenType?: string|null,
     *     expiresIn?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
