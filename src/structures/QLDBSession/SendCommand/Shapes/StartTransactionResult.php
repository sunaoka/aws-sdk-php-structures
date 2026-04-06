<?php

namespace Sunaoka\Aws\Structures\QLDBSession\SendCommand\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $TransactionId
 * @property TimingInformation|null $TimingInformation
 */
class StartTransactionResult extends Shape
{
    /**
     * @param array{
     *     TransactionId?: string|null,
     *     TimingInformation?: TimingInformation|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
