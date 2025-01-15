<?php

namespace Sunaoka\Aws\Structures\Appflow\DescribeConnectors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $customAuthenticationType
 * @property list<AuthParameter>|null $authParameters
 */
class CustomAuthConfig extends Shape
{
    /**
     * @param array{
     *     customAuthenticationType?: string|null,
     *     authParameters?: list<AuthParameter>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
