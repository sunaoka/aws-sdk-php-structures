<?php

namespace Sunaoka\Aws\Structures\FinSpaceData\ListDatasets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ColumnDefinition>|null $columns
 * @property list<string>|null $primaryKeyColumns
 */
class SchemaDefinition extends Shape
{
    /**
     * @param array{
     *     columns?: list<ColumnDefinition>|null,
     *     primaryKeyColumns?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
