<?php

namespace Sunaoka\Aws\Structures\Athena\GetQueryResults\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Row>|null $Rows
 * @property ResultSetMetadata|null $ResultSetMetadata
 */
class ResultSet extends Shape
{
    /**
     * @param array{
     *     Rows?: list<Row>|null,
     *     ResultSetMetadata?: ResultSetMetadata|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
