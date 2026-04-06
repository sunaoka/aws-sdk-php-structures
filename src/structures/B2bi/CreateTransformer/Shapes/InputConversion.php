<?php

namespace Sunaoka\Aws\Structures\B2bi\CreateTransformer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'X12' $fromFormat
 * @property FormatOptions|null $formatOptions
 * @property AdvancedOptions|null $advancedOptions
 */
class InputConversion extends Shape
{
    /**
     * @param array{
     *     fromFormat: 'X12',
     *     formatOptions?: FormatOptions|null,
     *     advancedOptions?: AdvancedOptions|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
