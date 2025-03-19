<?php

namespace Sunaoka\Aws\Structures\CleanRooms\ListMembers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property QueryComputePaymentConfig $queryCompute
 * @property MLPaymentConfig|null $machineLearning
 * @property JobComputePaymentConfig|null $jobCompute
 */
class PaymentConfiguration extends Shape
{
    /**
     * @param array{
     *     queryCompute: QueryComputePaymentConfig,
     *     machineLearning?: MLPaymentConfig|null,
     *     jobCompute?: JobComputePaymentConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
