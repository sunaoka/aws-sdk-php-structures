<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'BASIC'|'OAUTH2'|'CUSTOM'|null $authenticationType
 * @property OAuth2Properties|null $oAuth2Properties
 * @property string|null $secretArn
 * @property string|null $kmsKeyArn
 * @property BasicAuthenticationCredentials|null $basicAuthenticationCredentials
 * @property array<string, string>|null $customAuthenticationCredentials
 */
class AuthenticationConfigurationInput extends Shape
{
    /**
     * @param array{
     *     authenticationType?: 'BASIC'|'OAUTH2'|'CUSTOM'|null,
     *     oAuth2Properties?: OAuth2Properties|null,
     *     secretArn?: string|null,
     *     kmsKeyArn?: string|null,
     *     basicAuthenticationCredentials?: BasicAuthenticationCredentials|null,
     *     customAuthenticationCredentials?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
