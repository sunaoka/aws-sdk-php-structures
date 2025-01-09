<?php

namespace Sunaoka\Aws\Structures\RDSDataService\ExecuteSql\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Value> $values
 */
class Record extends Shape
{
    /**
     * @param array{values?: list<Value>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
