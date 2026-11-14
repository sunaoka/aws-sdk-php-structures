<?php

namespace Sunaoka\Aws\Structures\Ec2\DisassociateNetworkingFlexCostAllocationPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ResourceId
 * @property string|null $FailureCode
 * @property string|null $FailureReason
 */
class FlexCostAllocationOperationFailure extends Shape
{
    /**
     * @param array{
     *     ResourceId?: string|null,
     *     FailureCode?: string|null,
     *     FailureReason?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
