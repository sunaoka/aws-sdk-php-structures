<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAnalysisDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'COMMA'|'DOT'|'SPACE'|null $DecimalSeparator
 * @property ThousandSeparatorOptions|null $ThousandsSeparator
 */
class NumericSeparatorConfiguration extends Shape
{
    /**
     * @param array{
     *     DecimalSeparator?: 'COMMA'|'DOT'|'SPACE'|null,
     *     ThousandsSeparator?: ThousandSeparatorOptions|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
