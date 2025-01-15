<?php

namespace Sunaoka\Aws\Structures\Athena\GetQueryResults\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $VarCharValue
 */
class Datum extends Shape
{
    /**
     * @param array{VarCharValue?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
