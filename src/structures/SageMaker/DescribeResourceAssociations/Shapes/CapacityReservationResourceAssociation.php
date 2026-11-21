<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeResourceAssociations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CapacityReservationHyperPodClustersAssociation|null $HyperPodClusters
 * @property CapacityReservationEndpointsAssociation|null $Endpoints
 */
class CapacityReservationResourceAssociation extends Shape
{
    /**
     * @param array{
     *     HyperPodClusters?: CapacityReservationHyperPodClustersAssociation|null,
     *     Endpoints?: CapacityReservationEndpointsAssociation|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
