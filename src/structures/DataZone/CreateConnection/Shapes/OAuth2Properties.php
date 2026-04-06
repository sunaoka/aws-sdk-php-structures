<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AuthorizationCodeProperties|null $authorizationCodeProperties
 * @property OAuth2ClientApplication|null $oAuth2ClientApplication
 * @property GlueOAuth2Credentials|null $oAuth2Credentials
 * @property 'AUTHORIZATION_CODE'|'CLIENT_CREDENTIALS'|'JWT_BEARER'|null $oAuth2GrantType
 * @property string|null $tokenUrl
 * @property array<string, string>|null $tokenUrlParametersMap
 */
class OAuth2Properties extends Shape
{
    /**
     * @param array{
     *     authorizationCodeProperties?: AuthorizationCodeProperties|null,
     *     oAuth2ClientApplication?: OAuth2ClientApplication|null,
     *     oAuth2Credentials?: GlueOAuth2Credentials|null,
     *     oAuth2GrantType?: 'AUTHORIZATION_CODE'|'CLIENT_CREDENTIALS'|'JWT_BEARER'|null,
     *     tokenUrl?: string|null,
     *     tokenUrlParametersMap?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
