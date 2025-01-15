<?php

namespace Sunaoka\Aws\Structures\Ecs\DescribeTaskDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $namespace
 * @property string|null $value
 */
class SystemControl extends Shape
{
    /**
     * @param array{
     *     namespace?: string|null,
     *     value?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
