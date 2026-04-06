<?php

namespace Sunaoka\Aws\Structures\CleanRooms\CreateCollaboration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property QueryComputePaymentConfig $queryCompute
 */
class PaymentConfiguration extends Shape
{
    /**
     * @param array{queryCompute: QueryComputePaymentConfig} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
