<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\ListOutgoingTypedLinks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AttributeName
 * @property TypedAttributeValue $Value
 */
class AttributeNameAndValue extends Shape
{
    /**
     * @param array{
     *     AttributeName: string,
     *     Value: TypedAttributeValue
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
