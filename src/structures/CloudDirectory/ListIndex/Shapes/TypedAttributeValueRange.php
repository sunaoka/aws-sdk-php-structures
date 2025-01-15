<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\ListIndex\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'FIRST'|'LAST'|'LAST_BEFORE_MISSING_VALUES'|'INCLUSIVE'|'EXCLUSIVE' $StartMode
 * @property TypedAttributeValue|null $StartValue
 * @property 'FIRST'|'LAST'|'LAST_BEFORE_MISSING_VALUES'|'INCLUSIVE'|'EXCLUSIVE' $EndMode
 * @property TypedAttributeValue|null $EndValue
 */
class TypedAttributeValueRange extends Shape
{
    /**
     * @param array{
     *     StartMode: 'FIRST'|'LAST'|'LAST_BEFORE_MISSING_VALUES'|'INCLUSIVE'|'EXCLUSIVE',
     *     StartValue?: TypedAttributeValue|null,
     *     EndMode: 'FIRST'|'LAST'|'LAST_BEFORE_MISSING_VALUES'|'INCLUSIVE'|'EXCLUSIVE',
     *     EndValue?: TypedAttributeValue|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
