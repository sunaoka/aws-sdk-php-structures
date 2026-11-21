<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListCapacityReservations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 * @property list<Shapes\CapacityReservationFilter>|null $Filters
 */
class ListCapacityReservationsRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null,
     *     Filters?: list<Shapes\CapacityReservationFilter>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
