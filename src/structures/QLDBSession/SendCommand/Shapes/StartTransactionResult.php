<?php

namespace Sunaoka\Aws\Structures\QLDBSession\SendCommand\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TransactionId
 * @property TimingInformation $TimingInformation
 */
class StartTransactionResult extends Shape
{
    /**
     * @param array{
     *     TransactionId?: string,
     *     TimingInformation?: TimingInformation
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
