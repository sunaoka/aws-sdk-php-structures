<?php

namespace Sunaoka\Aws\Structures\RDSDataService\ExecuteSql\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ResultSetMetadata $resultSetMetadata
 * @property list<Record> $records
 */
class ResultFrame extends Shape
{
    /**
     * @param array{
     *     resultSetMetadata?: ResultSetMetadata,
     *     records?: list<Record>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
