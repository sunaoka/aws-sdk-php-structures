<?php

namespace Sunaoka\Aws\Structures\B2bi\UpdateTransformer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property X12AdvancedOptions|null $x12
 */
class AdvancedOptions extends Shape
{
    /**
     * @param array{x12?: X12AdvancedOptions|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
