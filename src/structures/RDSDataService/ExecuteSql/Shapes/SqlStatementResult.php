<?php

namespace Sunaoka\Aws\Structures\RDSDataService\ExecuteSql\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ResultFrame $resultFrame
 * @property int $numberOfRecordsUpdated
 */
class SqlStatementResult extends Shape
{
    /**
     * @param array{
     *     resultFrame?: ResultFrame,
     *     numberOfRecordsUpdated?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
