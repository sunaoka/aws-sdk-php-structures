<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\ListProfileAttributeValues\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Value
 */
class AttributeValueItem extends Shape
{
    /**
     * @param array{Value?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
