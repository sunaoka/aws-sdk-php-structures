<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDataSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property string|null $Id
 * @property string|null $Description
 * @property 'STRING'|'INTEGER'|'DECIMAL'|'DATETIME'|null $Type
 * @property 'FLOAT'|'FIXED'|null $SubType
 */
class OutputColumn extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     Id?: string|null,
     *     Description?: string|null,
     *     Type?: 'STRING'|'INTEGER'|'DECIMAL'|'DATETIME'|null,
     *     SubType?: 'FLOAT'|'FIXED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
