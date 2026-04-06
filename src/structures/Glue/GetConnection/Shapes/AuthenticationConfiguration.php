<?php

namespace Sunaoka\Aws\Structures\Glue\GetConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'BASIC'|'OAUTH2'|'CUSTOM'|'IAM'|null $AuthenticationType
 * @property string|null $SecretArn
 * @property OAuth2Properties|null $OAuth2Properties
 */
class AuthenticationConfiguration extends Shape
{
    /**
     * @param array{
     *     AuthenticationType?: 'BASIC'|'OAUTH2'|'CUSTOM'|'IAM'|null,
     *     SecretArn?: string|null,
     *     OAuth2Properties?: OAuth2Properties|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
