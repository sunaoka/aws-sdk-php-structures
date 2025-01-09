<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\BatchRead\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AttributeKeyAndValue> $Attributes
 */
class BatchGetObjectAttributesResponse extends Shape
{
    /**
     * @param array{Attributes?: list<AttributeKeyAndValue>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
