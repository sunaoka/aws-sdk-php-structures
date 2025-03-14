<?php

namespace Sunaoka\Aws\Structures\CleanRooms\CreateCollaboration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property QueryComputePaymentConfig $queryCompute
 * @property MLPaymentConfig|null $machineLearning
 */
class PaymentConfiguration extends Shape
{
    /**
     * @param array{
     *     queryCompute: QueryComputePaymentConfig,
     *     machineLearning?: MLPaymentConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
