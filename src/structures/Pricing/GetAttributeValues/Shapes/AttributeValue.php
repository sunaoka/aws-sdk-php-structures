<?php

namespace Sunaoka\Aws\Structures\Pricing\GetAttributeValues\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Value
 */
class AttributeValue extends Shape
{
    /**
     * @param array{Value?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
