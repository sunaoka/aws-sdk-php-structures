<?php

namespace Sunaoka\Aws\Structures\Appflow\DescribeConnectors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $customAuthenticationType
 * @property list<AuthParameter> $authParameters
 */
class CustomAuthConfig extends Shape
{
    /**
     * @param array{
     *     customAuthenticationType?: string,
     *     authParameters?: list<AuthParameter>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
