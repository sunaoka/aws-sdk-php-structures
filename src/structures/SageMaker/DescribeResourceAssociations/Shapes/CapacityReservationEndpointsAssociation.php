<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeResourceAssociations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $MlReservationId
 * @property 'Pending'|'Active'|'Inactive' $Status
 * @property 'Open'|'Targeted'|null $MatchCriteria
 * @property 'SingleEndpoint'|'MultipleEndpoints'|null $EndpointSharing
 * @property string|null $MlReservationArn
 * @property string|null $FailureReason
 * @property \Aws\Api\DateTimeResult $AssociatedTime
 */
class CapacityReservationEndpointsAssociation extends Shape
{
    /**
     * @param array{
     *     MlReservationId?: string|null,
     *     Status: 'Pending'|'Active'|'Inactive',
     *     MatchCriteria?: 'Open'|'Targeted'|null,
     *     EndpointSharing?: 'SingleEndpoint'|'MultipleEndpoints'|null,
     *     MlReservationArn?: string|null,
     *     FailureReason?: string|null,
     *     AssociatedTime: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
