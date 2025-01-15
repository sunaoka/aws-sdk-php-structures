<?php

namespace Sunaoka\Aws\Structures\RDSDataService\ExecuteSql\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $columnCount
 * @property list<ColumnMetadata>|null $columnMetadata
 */
class ResultSetMetadata extends Shape
{
    /**
     * @param array{
     *     columnCount?: int|null,
     *     columnMetadata?: list<ColumnMetadata>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
