<?php

namespace Sunaoka\Aws\Structures\CleanRooms\GetMembership\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property MembershipQueryComputePaymentConfig $queryCompute
 * @property MembershipMLPaymentConfig $machineLearning
 */
class MembershipPaymentConfiguration extends Shape
{
    /**
     * @param array{
     *     queryCompute: MembershipQueryComputePaymentConfig,
     *     machineLearning?: MembershipMLPaymentConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
