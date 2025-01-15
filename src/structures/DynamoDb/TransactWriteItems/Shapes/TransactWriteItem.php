<?php

namespace Sunaoka\Aws\Structures\DynamoDb\TransactWriteItems\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ConditionCheck|null $ConditionCheck
 * @property Put|null $Put
 * @property Delete|null $Delete
 * @property Update|null $Update
 */
class TransactWriteItem extends Shape
{
    /**
     * @param array{
     *     ConditionCheck?: ConditionCheck|null,
     *     Put?: Put|null,
     *     Delete?: Delete|null,
     *     Update?: Update|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
