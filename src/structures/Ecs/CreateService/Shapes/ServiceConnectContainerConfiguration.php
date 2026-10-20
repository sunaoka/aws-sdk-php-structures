<?php

namespace Sunaoka\Aws\Structures\Ecs\CreateService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'debug'|'info'|null $logLevel
 */
class ServiceConnectContainerConfiguration extends Shape
{
    /**
     * @param array{logLevel?: 'debug'|'info'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
