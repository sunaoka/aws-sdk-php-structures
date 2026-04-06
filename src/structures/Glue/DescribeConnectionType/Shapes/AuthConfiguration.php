<?php

namespace Sunaoka\Aws\Structures\Glue\DescribeConnectionType\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Property $AuthenticationType
 * @property Property|null $SecretArn
 * @property array<string, Property>|null $OAuth2Properties
 * @property array<string, Property>|null $BasicAuthenticationProperties
 * @property array<string, Property>|null $CustomAuthenticationProperties
 */
class AuthConfiguration extends Shape
{
    /**
     * @param array{
     *     AuthenticationType: Property,
     *     SecretArn?: Property|null,
     *     OAuth2Properties?: array<string, Property>|null,
     *     BasicAuthenticationProperties?: array<string, Property>|null,
     *     CustomAuthenticationProperties?: array<string, Property>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
