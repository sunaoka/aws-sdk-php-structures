<?php

namespace Sunaoka\Aws\Structures\B2bi\ListTransformers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'X12' $toFormat
 * @property FormatOptions $formatOptions
 */
class OutputConversion extends Shape
{
    /**
     * @param array{
     *     toFormat: 'X12',
     *     formatOptions?: FormatOptions
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
