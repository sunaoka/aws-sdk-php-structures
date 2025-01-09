<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateTopic\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AUTO'|'PERCENT'|'CURRENCY'|'NUMBER'|'DATE'|'STRING' $DisplayFormat
 * @property DisplayFormatOptions $DisplayFormatOptions
 */
class DefaultFormatting extends Shape
{
    /**
     * @param array{
     *     DisplayFormat?: 'AUTO'|'PERCENT'|'CURRENCY'|'NUMBER'|'DATE'|'STRING',
     *     DisplayFormatOptions?: DisplayFormatOptions
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
