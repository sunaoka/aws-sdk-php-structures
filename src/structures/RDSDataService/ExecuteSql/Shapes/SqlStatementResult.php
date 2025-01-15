<?php

namespace Sunaoka\Aws\Structures\RDSDataService\ExecuteSql\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ResultFrame|null $resultFrame
 * @property int|null $numberOfRecordsUpdated
 */
class SqlStatementResult extends Shape
{
    /**
     * @param array{
     *     resultFrame?: ResultFrame|null,
     *     numberOfRecordsUpdated?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
