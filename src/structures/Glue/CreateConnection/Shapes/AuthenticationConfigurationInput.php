<?php

namespace Sunaoka\Aws\Structures\Glue\CreateConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'BASIC'|'OAUTH2'|'CUSTOM'|null $AuthenticationType
 * @property string|null $SecretArn
 * @property OAuth2PropertiesInput|null $OAuth2Properties
 */
class AuthenticationConfigurationInput extends Shape
{
    /**
     * @param array{
     *     AuthenticationType?: 'BASIC'|'OAUTH2'|'CUSTOM'|null,
     *     SecretArn?: string|null,
     *     OAuth2Properties?: OAuth2PropertiesInput|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
