<?php

namespace Sunaoka\Aws\Structures\Appflow\UpdateConnectorProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'OAUTH2'|'APIKEY'|'BASIC'|'CUSTOM' $authenticationType
 * @property BasicAuthCredentials $basic
 * @property OAuth2Credentials $oauth2
 * @property ApiKeyCredentials $apiKey
 * @property CustomAuthCredentials $custom
 */
class CustomConnectorProfileCredentials extends Shape
{
    /**
     * @param array{
     *     authenticationType: 'OAUTH2'|'APIKEY'|'BASIC'|'CUSTOM',
     *     basic?: BasicAuthCredentials,
     *     oauth2?: OAuth2Credentials,
     *     apiKey?: ApiKeyCredentials,
     *     custom?: CustomAuthCredentials
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
