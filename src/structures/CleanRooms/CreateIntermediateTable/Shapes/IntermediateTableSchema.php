<?php

namespace Sunaoka\Aws\Structures\CleanRooms\CreateIntermediateTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Column> $columns
 */
class IntermediateTableSchema extends Shape
{
    /**
     * @param array{columns: list<Column>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
