<?php

namespace Sunaoka\Aws\Structures\Appflow\CreateConnectorProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'OAUTH2'|'APIKEY'|'BASIC'|'CUSTOM' $authenticationType
 * @property BasicAuthCredentials|null $basic
 * @property OAuth2Credentials|null $oauth2
 * @property ApiKeyCredentials|null $apiKey
 * @property CustomAuthCredentials|null $custom
 */
class CustomConnectorProfileCredentials extends Shape
{
    /**
     * @param array{
     *     authenticationType: 'OAUTH2'|'APIKEY'|'BASIC'|'CUSTOM',
     *     basic?: BasicAuthCredentials|null,
     *     oauth2?: OAuth2Credentials|null,
     *     apiKey?: ApiKeyCredentials|null,
     *     custom?: CustomAuthCredentials|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
