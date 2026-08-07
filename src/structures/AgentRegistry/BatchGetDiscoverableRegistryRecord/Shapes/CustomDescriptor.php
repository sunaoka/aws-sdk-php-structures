<?php

namespace Sunaoka\Aws\Structures\AgentRegistry\BatchGetDiscoverableRegistryRecord\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $data
 */
class CustomDescriptor extends Shape
{
    /**
     * @param array{data?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
