<?php

namespace Sunaoka\Aws\Structures\DataZone\UpdateConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AUTHORIZATION_CODE'|'CLIENT_CREDENTIALS'|'JWT_BEARER'|null $oAuth2GrantType
 * @property OAuth2ClientApplication|null $oAuth2ClientApplication
 * @property string|null $tokenUrl
 * @property array<string, string>|null $tokenUrlParametersMap
 * @property AuthorizationCodeProperties|null $authorizationCodeProperties
 * @property GlueOAuth2Credentials|null $oAuth2Credentials
 */
class OAuth2Properties extends Shape
{
    /**
     * @param array{
     *     oAuth2GrantType?: 'AUTHORIZATION_CODE'|'CLIENT_CREDENTIALS'|'JWT_BEARER'|null,
     *     oAuth2ClientApplication?: OAuth2ClientApplication|null,
     *     tokenUrl?: string|null,
     *     tokenUrlParametersMap?: array<string, string>|null,
     *     authorizationCodeProperties?: AuthorizationCodeProperties|null,
     *     oAuth2Credentials?: GlueOAuth2Credentials|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
