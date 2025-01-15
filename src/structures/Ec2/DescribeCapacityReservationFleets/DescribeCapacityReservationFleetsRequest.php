<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeCapacityReservationFleets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $CapacityReservationFleetIds
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 * @property list<Shapes\Filter>|null $Filters
 * @property bool|null $DryRun
 */
class DescribeCapacityReservationFleetsRequest extends Request
{
    /**
     * @param array{
     *     CapacityReservationFleetIds?: list<string>|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null,
     *     Filters?: list<Shapes\Filter>|null,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
