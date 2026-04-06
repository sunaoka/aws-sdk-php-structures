<?php

namespace Sunaoka\Aws\Structures\RTBFabric\CreateResponderGateway\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AutoScalingGroupsConfiguration|null $autoScalingGroups
 * @property EksEndpointsConfiguration|null $eksEndpoints
 */
class ManagedEndpointConfiguration extends Shape
{
    /**
     * @param array{
     *     autoScalingGroups?: AutoScalingGroupsConfiguration|null,
     *     eksEndpoints?: EksEndpointsConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
