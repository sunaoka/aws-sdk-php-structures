<?php

namespace Sunaoka\Aws\Structures\Athena\GetQueryResults\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $VarCharValue
 */
class Datum extends Shape
{
    /**
     * @param array{VarCharValue?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
