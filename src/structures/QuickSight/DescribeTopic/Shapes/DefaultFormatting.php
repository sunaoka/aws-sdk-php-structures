<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTopic\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AUTO'|'PERCENT'|'CURRENCY'|'NUMBER'|'DATE'|'STRING'|null $DisplayFormat
 * @property DisplayFormatOptions|null $DisplayFormatOptions
 */
class DefaultFormatting extends Shape
{
    /**
     * @param array{
     *     DisplayFormat?: 'AUTO'|'PERCENT'|'CURRENCY'|'NUMBER'|'DATE'|'STRING'|null,
     *     DisplayFormatOptions?: DisplayFormatOptions|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
