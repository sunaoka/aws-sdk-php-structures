<?php

namespace Sunaoka\Aws\Structures\Inspector\DescribeResourceGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $key
 * @property string|null $value
 */
class ResourceGroupTag extends Shape
{
    /**
     * @param array{
     *     key: string,
     *     value?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
