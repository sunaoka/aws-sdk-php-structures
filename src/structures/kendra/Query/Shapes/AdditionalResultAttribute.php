<?php

namespace Sunaoka\Aws\Structures\kendra\Query\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Key
 * @property 'TEXT_WITH_HIGHLIGHTS_VALUE' $ValueType
 * @property AdditionalResultAttributeValue $Value
 */
class AdditionalResultAttribute extends Shape
{
    /**
     * @param array{
     *     Key: string,
     *     ValueType: 'TEXT_WITH_HIGHLIGHTS_VALUE',
     *     Value: AdditionalResultAttributeValue
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
