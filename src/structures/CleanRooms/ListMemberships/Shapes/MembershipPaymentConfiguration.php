<?php

namespace Sunaoka\Aws\Structures\CleanRooms\ListMemberships\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property MembershipQueryComputePaymentConfig $queryCompute
 * @property MembershipMLPaymentConfig|null $machineLearning
 * @property MembershipJobComputePaymentConfig|null $jobCompute
 */
class MembershipPaymentConfiguration extends Shape
{
    /**
     * @param array{
     *     queryCompute: MembershipQueryComputePaymentConfig,
     *     machineLearning?: MembershipMLPaymentConfig|null,
     *     jobCompute?: MembershipJobComputePaymentConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
