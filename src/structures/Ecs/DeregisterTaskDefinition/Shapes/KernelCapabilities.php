<?php

namespace Sunaoka\Aws\Structures\Ecs\DeregisterTaskDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $add
 * @property list<string> $drop
 */
class KernelCapabilities extends Shape
{
    /**
     * @param array{
     *     add?: list<string>,
     *     drop?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
