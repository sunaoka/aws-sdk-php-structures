<?php

namespace Sunaoka\Aws\Structures\Mobile\DescribeProject\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $type
 * @property string|null $name
 * @property string|null $arn
 * @property string|null $feature
 * @property array<string, string>|null $attributes
 */
class ResourceShape extends Shape
{
    /**
     * @param array{
     *     type?: string|null,
     *     name?: string|null,
     *     arn?: string|null,
     *     feature?: string|null,
     *     attributes?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
