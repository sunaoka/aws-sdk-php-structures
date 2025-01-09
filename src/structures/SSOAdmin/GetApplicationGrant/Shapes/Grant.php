<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\GetApplicationGrant\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AuthorizationCodeGrant $AuthorizationCode
 * @property JwtBearerGrant $JwtBearer
 * @property RefreshTokenGrant $RefreshToken
 * @property TokenExchangeGrant $TokenExchange
 */
class Grant extends Shape
{
    /**
     * @param array{
     *     AuthorizationCode?: AuthorizationCodeGrant,
     *     JwtBearer?: JwtBearerGrant,
     *     RefreshToken?: RefreshTokenGrant,
     *     TokenExchange?: TokenExchangeGrant
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
