<?php

namespace Sunaoka\Aws\Structures\Glacier\GetDataRetrievalPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<DataRetrievalRule>|null $Rules
 */
class DataRetrievalPolicy extends Shape
{
    /**
     * @param array{Rules?: list<DataRetrievalRule>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
