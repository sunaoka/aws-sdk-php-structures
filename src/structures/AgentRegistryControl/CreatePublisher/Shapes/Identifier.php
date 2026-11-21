<?php

namespace Sunaoka\Aws\Structures\AgentRegistryControl\CreatePublisher\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $domain
 */
class Identifier extends Shape
{
    /**
     * @param array{domain?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
