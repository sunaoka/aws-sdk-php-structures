<?php

namespace Sunaoka\Aws\Structures\Appflow\DescribeConnectors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $oauthScopes
 * @property list<string> $tokenUrls
 * @property list<string> $authCodeUrls
 * @property list<'CLIENT_CREDENTIALS'|'AUTHORIZATION_CODE'|'JWT_BEARER'> $oauth2GrantTypesSupported
 * @property list<OAuth2CustomParameter> $oauth2CustomProperties
 */
class OAuth2Defaults extends Shape
{
    /**
     * @param array{
     *     oauthScopes?: list<string>,
     *     tokenUrls?: list<string>,
     *     authCodeUrls?: list<string>,
     *     oauth2GrantTypesSupported?: list<'CLIENT_CREDENTIALS'|'AUTHORIZATION_CODE'|'JWT_BEARER'>,
     *     oauth2CustomProperties?: list<OAuth2CustomParameter>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
