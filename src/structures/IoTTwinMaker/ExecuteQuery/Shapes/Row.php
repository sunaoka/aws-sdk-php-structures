<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\ExecuteQuery\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<QueryResultValue> $rowData
 */
class Row extends Shape
{
    /**
     * @param array{rowData?: list<QueryResultValue>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
