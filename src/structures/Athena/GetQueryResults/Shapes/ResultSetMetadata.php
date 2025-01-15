<?php

namespace Sunaoka\Aws\Structures\Athena\GetQueryResults\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ColumnInfo>|null $ColumnInfo
 */
class ResultSetMetadata extends Shape
{
    /**
     * @param array{ColumnInfo?: list<ColumnInfo>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
