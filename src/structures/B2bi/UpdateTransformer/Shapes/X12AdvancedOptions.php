<?php

namespace Sunaoka\Aws\Structures\B2bi\UpdateTransformer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property X12SplitOptions|null $splitOptions
 * @property X12ValidationOptions|null $validationOptions
 */
class X12AdvancedOptions extends Shape
{
    /**
     * @param array{
     *     splitOptions?: X12SplitOptions|null,
     *     validationOptions?: X12ValidationOptions|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
