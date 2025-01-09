<?php

namespace Sunaoka\Aws\Structures\Glue\DescribeConnectionType\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Property $AuthenticationType
 * @property Property $SecretArn
 * @property array<string, Property> $OAuth2Properties
 * @property array<string, Property> $BasicAuthenticationProperties
 * @property array<string, Property> $CustomAuthenticationProperties
 */
class AuthConfiguration extends Shape
{
    /**
     * @param array{
     *     AuthenticationType: Property,
     *     SecretArn?: Property,
     *     OAuth2Properties?: array<string, Property>,
     *     BasicAuthenticationProperties?: array<string, Property>,
     *     CustomAuthenticationProperties?: array<string, Property>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
