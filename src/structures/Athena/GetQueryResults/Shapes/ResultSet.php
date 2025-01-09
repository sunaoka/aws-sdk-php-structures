<?php

namespace Sunaoka\Aws\Structures\Athena\GetQueryResults\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Row> $Rows
 * @property ResultSetMetadata $ResultSetMetadata
 */
class ResultSet extends Shape
{
    /**
     * @param array{
     *     Rows?: list<Row>,
     *     ResultSetMetadata?: ResultSetMetadata
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
