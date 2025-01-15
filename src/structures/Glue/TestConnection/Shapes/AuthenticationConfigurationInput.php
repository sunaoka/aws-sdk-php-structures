<?php

namespace Sunaoka\Aws\Structures\Glue\TestConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'BASIC'|'OAUTH2'|'CUSTOM'|'IAM'|null $AuthenticationType
 * @property OAuth2PropertiesInput|null $OAuth2Properties
 * @property string|null $SecretArn
 * @property string|null $KmsKeyArn
 * @property BasicAuthenticationCredentials|null $BasicAuthenticationCredentials
 * @property array<string, string>|null $CustomAuthenticationCredentials
 */
class AuthenticationConfigurationInput extends Shape
{
    /**
     * @param array{
     *     AuthenticationType?: 'BASIC'|'OAUTH2'|'CUSTOM'|'IAM'|null,
     *     OAuth2Properties?: OAuth2PropertiesInput|null,
     *     SecretArn?: string|null,
     *     KmsKeyArn?: string|null,
     *     BasicAuthenticationCredentials?: BasicAuthenticationCredentials|null,
     *     CustomAuthenticationCredentials?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
