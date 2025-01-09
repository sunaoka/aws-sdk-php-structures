<?php

namespace Sunaoka\Aws\Structures\DynamoDb\TransactGetItems\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Get $Get
 */
class TransactGetItem extends Shape
{
    /**
     * @param array{Get: Get} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
