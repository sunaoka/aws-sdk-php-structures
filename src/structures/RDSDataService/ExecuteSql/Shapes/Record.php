<?php

namespace Sunaoka\Aws\Structures\RDSDataService\ExecuteSql\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Value>|null $values
 */
class Record extends Shape
{
    /**
     * @param array{values?: list<Value>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
