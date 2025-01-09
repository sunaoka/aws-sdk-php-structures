<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\CreateObject\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AttributeKey $Key
 * @property TypedAttributeValue $Value
 */
class AttributeKeyAndValue extends Shape
{
    /**
     * @param array{
     *     Key: AttributeKey,
     *     Value: TypedAttributeValue
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
