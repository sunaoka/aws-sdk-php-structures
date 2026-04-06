<?php

namespace Sunaoka\Aws\Structures\CleanRooms\CreateMembership\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property MembershipQueryComputePaymentConfig $queryCompute
 */
class MembershipPaymentConfiguration extends Shape
{
    /**
     * @param array{queryCompute: MembershipQueryComputePaymentConfig} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
