<?php

namespace Sunaoka\Aws\Structures\Glue\GetConnections\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AUTHORIZATION_CODE'|'CLIENT_CREDENTIALS'|'JWT_BEARER' $OAuth2GrantType
 * @property OAuth2ClientApplication $OAuth2ClientApplication
 * @property string $TokenUrl
 * @property array<string, string> $TokenUrlParametersMap
 */
class OAuth2Properties extends Shape
{
    /**
     * @param array{
     *     OAuth2GrantType?: 'AUTHORIZATION_CODE'|'CLIENT_CREDENTIALS'|'JWT_BEARER',
     *     OAuth2ClientApplication?: OAuth2ClientApplication,
     *     TokenUrl?: string,
     *     TokenUrlParametersMap?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
