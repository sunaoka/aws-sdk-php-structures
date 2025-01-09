<?php

namespace Sunaoka\Aws\Structures\RDSDataService\ExecuteSql\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $columnCount
 * @property list<ColumnMetadata> $columnMetadata
 */
class ResultSetMetadata extends Shape
{
    /**
     * @param array{
     *     columnCount?: int,
     *     columnMetadata?: list<ColumnMetadata>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
