<?php

namespace Sunaoka\Aws\Structures\Ecs\DescribeTasks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property string|null $value
 */
class KeyValuePair extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     value?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
