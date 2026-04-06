<?php

namespace Sunaoka\Aws\Structures\Honeycode\ListTables\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $tableId
 * @property string|null $tableName
 */
class Table extends Shape
{
    /**
     * @param array{
     *     tableId?: string|null,
     *     tableName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
