<?php

namespace Sunaoka\Aws\Structures\Glacier\SetDataRetrievalPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<DataRetrievalRule> $Rules
 */
class DataRetrievalPolicy extends Shape
{
    /**
     * @param array{Rules?: list<DataRetrievalRule>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
