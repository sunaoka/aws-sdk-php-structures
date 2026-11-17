<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateInferenceRouter\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property list<Destination> $Destinations
 * @property RoutingTargetAsyncInferenceConfig|null $AsyncInferenceConfig
 * @property 'LocalRegionFirst'|'InstancePoolOrder'|null $RoutingPreference
 */
class RoutingTarget extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Destinations: list<Destination>,
     *     AsyncInferenceConfig?: RoutingTargetAsyncInferenceConfig|null,
     *     RoutingPreference?: 'LocalRegionFirst'|'InstancePoolOrder'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
