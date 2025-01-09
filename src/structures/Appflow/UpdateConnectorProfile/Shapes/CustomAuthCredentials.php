<?php

namespace Sunaoka\Aws\Structures\Appflow\UpdateConnectorProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $customAuthenticationType
 * @property array<string, string> $credentialsMap
 */
class CustomAuthCredentials extends Shape
{
    /**
     * @param array{
     *     customAuthenticationType: string,
     *     credentialsMap?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
