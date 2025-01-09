<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'BASIC'|'OAUTH2'|'CUSTOM' $authenticationType
 * @property BasicAuthenticationCredentials $basicAuthenticationCredentials
 * @property array<string, string> $customAuthenticationCredentials
 * @property string $kmsKeyArn
 * @property OAuth2Properties $oAuth2Properties
 * @property string $secretArn
 */
class AuthenticationConfigurationInput extends Shape
{
    /**
     * @param array{
     *     authenticationType?: 'BASIC'|'OAUTH2'|'CUSTOM',
     *     basicAuthenticationCredentials?: BasicAuthenticationCredentials,
     *     customAuthenticationCredentials?: array<string, string>,
     *     kmsKeyArn?: string,
     *     oAuth2Properties?: OAuth2Properties,
     *     secretArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
