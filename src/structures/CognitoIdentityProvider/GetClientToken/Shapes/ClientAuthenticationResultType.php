<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\GetClientToken\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AccessToken
 * @property int|null $ExpiresIn
 * @property string|null $TokenType
 */
class ClientAuthenticationResultType extends Shape
{
    /**
     * @param array{
     *     AccessToken?: string|null,
     *     ExpiresIn?: int|null,
     *     TokenType?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
