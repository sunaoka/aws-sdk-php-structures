<?php

namespace Sunaoka\Aws\Structures\B2bi\UpdateTransformer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $elementId
 * @property int<1, 1000000> $maxLength
 * @property int<1, 1000000> $minLength
 */
class X12ElementLengthValidationRule extends Shape
{
    /**
     * @param array{
     *     elementId: string,
     *     maxLength: int<1, 1000000>,
     *     minLength: int<1, 1000000>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
