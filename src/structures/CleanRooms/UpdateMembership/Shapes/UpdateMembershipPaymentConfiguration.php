<?php

namespace Sunaoka\Aws\Structures\CleanRooms\UpdateMembership\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property MembershipQueryComputePaymentConfig|null $queryCompute
 * @property MembershipMLPaymentConfig|null $machineLearning
 * @property MembershipJobComputePaymentConfig|null $jobCompute
 */
class UpdateMembershipPaymentConfiguration extends Shape
{
    /**
     * @param array{
     *     queryCompute?: MembershipQueryComputePaymentConfig|null,
     *     machineLearning?: MembershipMLPaymentConfig|null,
     *     jobCompute?: MembershipJobComputePaymentConfig|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
