<?php

namespace Sunaoka\Aws\Structures\RDSDataService\ExecuteSql\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ResultSetMetadata|null $resultSetMetadata
 * @property list<Record>|null $records
 */
class ResultFrame extends Shape
{
    /**
     * @param array{
     *     resultSetMetadata?: ResultSetMetadata|null,
     *     records?: list<Record>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
