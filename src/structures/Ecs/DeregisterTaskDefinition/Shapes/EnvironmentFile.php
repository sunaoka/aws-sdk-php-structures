<?php

namespace Sunaoka\Aws\Structures\Ecs\DeregisterTaskDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $value
 * @property 's3' $type
 */
class EnvironmentFile extends Shape
{
    /**
     * @param array{
     *     value: string,
     *     type: 's3'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
