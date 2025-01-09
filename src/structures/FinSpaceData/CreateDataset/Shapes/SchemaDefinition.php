<?php

namespace Sunaoka\Aws\Structures\FinSpaceData\CreateDataset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ColumnDefinition> $columns
 * @property list<string> $primaryKeyColumns
 */
class SchemaDefinition extends Shape
{
    /**
     * @param array{
     *     columns?: list<ColumnDefinition>,
     *     primaryKeyColumns?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
