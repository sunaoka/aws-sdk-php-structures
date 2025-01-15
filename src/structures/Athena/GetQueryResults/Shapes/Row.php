<?php

namespace Sunaoka\Aws\Structures\Athena\GetQueryResults\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Datum>|null $Data
 */
class Row extends Shape
{
    /**
     * @param array{Data?: list<Datum>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
