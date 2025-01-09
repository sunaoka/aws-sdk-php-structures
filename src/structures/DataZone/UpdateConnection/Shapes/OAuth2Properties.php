<?php

namespace Sunaoka\Aws\Structures\DataZone\UpdateConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AuthorizationCodeProperties $authorizationCodeProperties
 * @property OAuth2ClientApplication $oAuth2ClientApplication
 * @property GlueOAuth2Credentials $oAuth2Credentials
 * @property 'AUTHORIZATION_CODE'|'CLIENT_CREDENTIALS'|'JWT_BEARER' $oAuth2GrantType
 * @property string $tokenUrl
 * @property array<string, string> $tokenUrlParametersMap
 */
class OAuth2Properties extends Shape
{
    /**
     * @param array{
     *     authorizationCodeProperties?: AuthorizationCodeProperties,
     *     oAuth2ClientApplication?: OAuth2ClientApplication,
     *     oAuth2Credentials?: GlueOAuth2Credentials,
     *     oAuth2GrantType?: 'AUTHORIZATION_CODE'|'CLIENT_CREDENTIALS'|'JWT_BEARER',
     *     tokenUrl?: string,
     *     tokenUrlParametersMap?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
