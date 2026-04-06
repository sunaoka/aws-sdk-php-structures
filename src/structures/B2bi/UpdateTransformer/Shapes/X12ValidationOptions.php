<?php

namespace Sunaoka\Aws\Structures\B2bi\UpdateTransformer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<X12ValidationRule>|null $validationRules
 */
class X12ValidationOptions extends Shape
{
    /**
     * @param array{validationRules?: list<X12ValidationRule>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
