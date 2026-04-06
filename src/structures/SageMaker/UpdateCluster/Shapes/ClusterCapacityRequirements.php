<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ClusterSpotOptions|null $Spot
 * @property ClusterOnDemandOptions|null $OnDemand
 */
class ClusterCapacityRequirements extends Shape
{
    /**
     * @param array{
     *     Spot?: ClusterSpotOptions|null,
     *     OnDemand?: ClusterOnDemandOptions|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
