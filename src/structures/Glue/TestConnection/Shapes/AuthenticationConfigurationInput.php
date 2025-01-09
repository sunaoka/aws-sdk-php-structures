<?php

namespace Sunaoka\Aws\Structures\Glue\TestConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'BASIC'|'OAUTH2'|'CUSTOM'|'IAM' $AuthenticationType
 * @property OAuth2PropertiesInput $OAuth2Properties
 * @property string $SecretArn
 * @property string $KmsKeyArn
 * @property BasicAuthenticationCredentials $BasicAuthenticationCredentials
 * @property array<string, string> $CustomAuthenticationCredentials
 */
class AuthenticationConfigurationInput extends Shape
{
    /**
     * @param array{
     *     AuthenticationType?: 'BASIC'|'OAUTH2'|'CUSTOM'|'IAM',
     *     OAuth2Properties?: OAuth2PropertiesInput,
     *     SecretArn?: string,
     *     KmsKeyArn?: string,
     *     BasicAuthenticationCredentials?: BasicAuthenticationCredentials,
     *     CustomAuthenticationCredentials?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
