<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateDataSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string|null $Id
 * @property 'STRING'|'INTEGER'|'DECIMAL'|'DATETIME'|'BIT'|'BOOLEAN'|'JSON' $Type
 * @property 'FLOAT'|'FIXED'|null $SubType
 */
class InputColumn extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Id?: string|null,
     *     Type: 'STRING'|'INTEGER'|'DECIMAL'|'DATETIME'|'BIT'|'BOOLEAN'|'JSON',
     *     SubType?: 'FLOAT'|'FIXED'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
