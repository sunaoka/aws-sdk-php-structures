<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\BatchRead\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'FIRST'|'LAST'|'LAST_BEFORE_MISSING_VALUES'|'INCLUSIVE'|'EXCLUSIVE' $StartMode
 * @property TypedAttributeValue $StartValue
 * @property 'FIRST'|'LAST'|'LAST_BEFORE_MISSING_VALUES'|'INCLUSIVE'|'EXCLUSIVE' $EndMode
 * @property TypedAttributeValue $EndValue
 */
class TypedAttributeValueRange extends Shape
{
    /**
     * @param array{
     *     StartMode: 'FIRST'|'LAST'|'LAST_BEFORE_MISSING_VALUES'|'INCLUSIVE'|'EXCLUSIVE',
     *     StartValue?: TypedAttributeValue,
     *     EndMode: 'FIRST'|'LAST'|'LAST_BEFORE_MISSING_VALUES'|'INCLUSIVE'|'EXCLUSIVE',
     *     EndValue?: TypedAttributeValue
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
