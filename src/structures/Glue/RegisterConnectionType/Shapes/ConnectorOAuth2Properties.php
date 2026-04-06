<?php

namespace Sunaoka\Aws\Structures\Glue\RegisterConnectionType\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CLIENT_CREDENTIALS'|'JWT_BEARER'|'AUTHORIZATION_CODE' $OAuth2GrantType
 * @property ClientCredentialsProperties|null $ClientCredentialsProperties
 * @property JWTBearerProperties|null $JWTBearerProperties
 * @property ConnectorAuthorizationCodeProperties|null $AuthorizationCodeProperties
 */
class ConnectorOAuth2Properties extends Shape
{
    /**
     * @param array{
     *     OAuth2GrantType: 'CLIENT_CREDENTIALS'|'JWT_BEARER'|'AUTHORIZATION_CODE',
     *     ClientCredentialsProperties?: ClientCredentialsProperties|null,
     *     JWTBearerProperties?: JWTBearerProperties|null,
     *     AuthorizationCodeProperties?: ConnectorAuthorizationCodeProperties|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
