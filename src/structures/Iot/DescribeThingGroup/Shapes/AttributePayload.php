<?php

namespace Sunaoka\Aws\Structures\Iot\DescribeThingGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, string> $attributes
 * @property bool $merge
 */
class AttributePayload extends Shape
{
    /**
     * @param array{
     *     attributes?: array<string, string>,
     *     merge?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
