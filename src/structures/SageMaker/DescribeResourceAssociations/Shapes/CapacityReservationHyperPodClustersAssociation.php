<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeResourceAssociations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Pending'|'Active'|'Inactive' $Status
 * @property string|null $FailureReason
 * @property \Aws\Api\DateTimeResult $AssociatedTime
 */
class CapacityReservationHyperPodClustersAssociation extends Shape
{
    /**
     * @param array{
     *     Status: 'Pending'|'Active'|'Inactive',
     *     FailureReason?: string|null,
     *     AssociatedTime: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
