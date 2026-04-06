<?php

namespace Sunaoka\Aws\Structures\Glue\GetConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AUTHORIZATION_CODE'|'CLIENT_CREDENTIALS'|'JWT_BEARER'|null $OAuth2GrantType
 * @property OAuth2ClientApplication|null $OAuth2ClientApplication
 * @property string|null $TokenUrl
 * @property array<string, string>|null $TokenUrlParametersMap
 */
class OAuth2Properties extends Shape
{
    /**
     * @param array{
     *     OAuth2GrantType?: 'AUTHORIZATION_CODE'|'CLIENT_CREDENTIALS'|'JWT_BEARER'|null,
     *     OAuth2ClientApplication?: OAuth2ClientApplication|null,
     *     TokenUrl?: string|null,
     *     TokenUrlParametersMap?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
