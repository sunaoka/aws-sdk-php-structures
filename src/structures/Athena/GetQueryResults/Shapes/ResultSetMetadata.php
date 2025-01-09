<?php

namespace Sunaoka\Aws\Structures\Athena\GetQueryResults\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ColumnInfo> $ColumnInfo
 */
class ResultSetMetadata extends Shape
{
    /**
     * @param array{ColumnInfo?: list<ColumnInfo>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
