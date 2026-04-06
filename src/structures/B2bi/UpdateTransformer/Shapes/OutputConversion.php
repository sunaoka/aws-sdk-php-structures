<?php

namespace Sunaoka\Aws\Structures\B2bi\UpdateTransformer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'X12' $toFormat
 * @property FormatOptions|null $formatOptions
 */
class OutputConversion extends Shape
{
    /**
     * @param array{
     *     toFormat: 'X12',
     *     formatOptions?: FormatOptions|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
