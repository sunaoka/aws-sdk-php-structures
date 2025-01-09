<?php

namespace Sunaoka\Aws\Structures\DynamoDb\TransactWriteItems\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ConditionCheck $ConditionCheck
 * @property Put $Put
 * @property Delete $Delete
 * @property Update $Update
 */
class TransactWriteItem extends Shape
{
    /**
     * @param array{
     *     ConditionCheck?: ConditionCheck,
     *     Put?: Put,
     *     Delete?: Delete,
     *     Update?: Update
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
