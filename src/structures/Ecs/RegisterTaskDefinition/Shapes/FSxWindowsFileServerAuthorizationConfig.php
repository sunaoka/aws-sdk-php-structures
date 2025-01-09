<?php

namespace Sunaoka\Aws\Structures\Ecs\RegisterTaskDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $credentialsParameter
 * @property string $domain
 */
class FSxWindowsFileServerAuthorizationConfig extends Shape
{
    /**
     * @param array{
     *     credentialsParameter: string,
     *     domain: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
