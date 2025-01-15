<?php

namespace Sunaoka\Aws\Structures\Appflow\DescribeConnector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $oauthScopes
 * @property list<string>|null $tokenUrls
 * @property list<string>|null $authCodeUrls
 * @property list<'CLIENT_CREDENTIALS'|'AUTHORIZATION_CODE'|'JWT_BEARER'>|null $oauth2GrantTypesSupported
 * @property list<OAuth2CustomParameter>|null $oauth2CustomProperties
 */
class OAuth2Defaults extends Shape
{
    /**
     * @param array{
     *     oauthScopes?: list<string>|null,
     *     tokenUrls?: list<string>|null,
     *     authCodeUrls?: list<string>|null,
     *     oauth2GrantTypesSupported?: list<'CLIENT_CREDENTIALS'|'AUTHORIZATION_CODE'|'JWT_BEARER'>|null,
     *     oauth2CustomProperties?: list<OAuth2CustomParameter>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
