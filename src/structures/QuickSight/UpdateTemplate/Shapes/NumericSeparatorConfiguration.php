<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'COMMA'|'DOT'|'SPACE' $DecimalSeparator
 * @property ThousandSeparatorOptions $ThousandsSeparator
 */
class NumericSeparatorConfiguration extends Shape
{
    /**
     * @param array{
     *     DecimalSeparator?: 'COMMA'|'DOT'|'SPACE',
     *     ThousandsSeparator?: ThousandSeparatorOptions
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
