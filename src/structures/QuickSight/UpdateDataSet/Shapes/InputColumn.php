<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDataSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property 'STRING'|'INTEGER'|'DECIMAL'|'DATETIME'|'BIT'|'BOOLEAN'|'JSON' $Type
 * @property 'FLOAT'|'FIXED' $SubType
 */
class InputColumn extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Type: 'STRING'|'INTEGER'|'DECIMAL'|'DATETIME'|'BIT'|'BOOLEAN'|'JSON',
     *     SubType?: 'FLOAT'|'FIXED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
