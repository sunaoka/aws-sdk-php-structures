<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'BASIC'|'OAUTH2'|'CUSTOM'|null $authenticationType
 * @property BasicAuthenticationCredentials|null $basicAuthenticationCredentials
 * @property array<string, string>|null $customAuthenticationCredentials
 * @property string|null $kmsKeyArn
 * @property OAuth2Properties|null $oAuth2Properties
 * @property string|null $secretArn
 */
class AuthenticationConfigurationInput extends Shape
{
    /**
     * @param array{
     *     authenticationType?: 'BASIC'|'OAUTH2'|'CUSTOM'|null,
     *     basicAuthenticationCredentials?: BasicAuthenticationCredentials|null,
     *     customAuthenticationCredentials?: array<string, string>|null,
     *     kmsKeyArn?: string|null,
     *     oAuth2Properties?: OAuth2Properties|null,
     *     secretArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
