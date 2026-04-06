<?php

namespace Sunaoka\Aws\Structures\B2bi\ListTransformers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'X12' $toFormat
 * @property FormatOptions|null $formatOptions
 * @property AdvancedOptions|null $advancedOptions
 */
class OutputConversion extends Shape
{
    /**
     * @param array{
     *     toFormat: 'X12',
     *     formatOptions?: FormatOptions|null,
     *     advancedOptions?: AdvancedOptions|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
