<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\ListApplicationGrants\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AuthorizationCodeGrant|null $AuthorizationCode
 * @property JwtBearerGrant|null $JwtBearer
 * @property RefreshTokenGrant|null $RefreshToken
 * @property TokenExchangeGrant|null $TokenExchange
 */
class Grant extends Shape
{
    /**
     * @param array{
     *     AuthorizationCode?: AuthorizationCodeGrant|null,
     *     JwtBearer?: JwtBearerGrant|null,
     *     RefreshToken?: RefreshTokenGrant|null,
     *     TokenExchange?: TokenExchangeGrant|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
