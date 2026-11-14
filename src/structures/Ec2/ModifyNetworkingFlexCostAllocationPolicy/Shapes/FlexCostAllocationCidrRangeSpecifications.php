<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyNetworkingFlexCostAllocationPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PrefixesType
 * @property list<FlexCostAllocationCidrMapping> $Prefixes
 */
class FlexCostAllocationCidrRangeSpecifications extends Shape
{
    /**
     * @param array{
     *     PrefixesType: string,
     *     Prefixes: list<FlexCostAllocationCidrMapping>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
