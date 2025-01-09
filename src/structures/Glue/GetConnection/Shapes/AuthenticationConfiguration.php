<?php

namespace Sunaoka\Aws\Structures\Glue\GetConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'BASIC'|'OAUTH2'|'CUSTOM'|'IAM' $AuthenticationType
 * @property string $SecretArn
 * @property OAuth2Properties $OAuth2Properties
 */
class AuthenticationConfiguration extends Shape
{
    /**
     * @param array{
     *     AuthenticationType?: 'BASIC'|'OAUTH2'|'CUSTOM'|'IAM',
     *     SecretArn?: string,
     *     OAuth2Properties?: OAuth2Properties
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
