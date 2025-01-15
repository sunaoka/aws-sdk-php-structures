<?php

namespace Sunaoka\Aws\Structures\QLDBSession\SendCommand\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TransactionId
 * @property string $Statement
 * @property list<ValueHolder>|null $Parameters
 */
class ExecuteStatementRequest extends Shape
{
    /**
     * @param array{
     *     TransactionId: string,
     *     Statement: string,
     *     Parameters?: list<ValueHolder>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
