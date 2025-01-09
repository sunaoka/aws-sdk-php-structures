<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDataSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $Description
 * @property 'STRING'|'INTEGER'|'DECIMAL'|'DATETIME' $Type
 * @property 'FLOAT'|'FIXED' $SubType
 */
class OutputColumn extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     Description?: string,
     *     Type?: 'STRING'|'INTEGER'|'DECIMAL'|'DATETIME',
     *     SubType?: 'FLOAT'|'FIXED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
