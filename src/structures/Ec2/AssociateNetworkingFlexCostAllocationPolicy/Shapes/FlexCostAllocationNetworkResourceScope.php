<?php

namespace Sunaoka\Aws\Structures\Ec2\AssociateNetworkingFlexCostAllocationPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'account'|'vpc'|'subnet' $ResourceType
 * @property list<string> $ResourceIds
 */
class FlexCostAllocationNetworkResourceScope extends Shape
{
    /**
     * @param array{
     *     ResourceType: 'account'|'vpc'|'subnet',
     *     ResourceIds: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
