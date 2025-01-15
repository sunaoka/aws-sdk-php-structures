<?php

namespace Sunaoka\Aws\Structures\Iot\DescribeThingGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, string>|null $attributes
 * @property bool|null $merge
 */
class AttributePayload extends Shape
{
    /**
     * @param array{
     *     attributes?: array<string, string>|null,
     *     merge?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
