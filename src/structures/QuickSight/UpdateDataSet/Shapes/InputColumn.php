<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDataSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string|null $Id
 * @property 'STRING'|'INTEGER'|'DECIMAL'|'DATETIME'|'BIT'|'BOOLEAN'|'JSON'|'SEMISTRUCT' $Type
 * @property 'FLOAT'|'FIXED'|null $SubType
 */
class InputColumn extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Id?: string|null,
     *     Type: 'STRING'|'INTEGER'|'DECIMAL'|'DATETIME'|'BIT'|'BOOLEAN'|'JSON'|'SEMISTRUCT',
     *     SubType?: 'FLOAT'|'FIXED'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
