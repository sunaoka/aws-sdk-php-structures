<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeCapacityReservationFleets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $CapacityReservationFleetIds
 * @property string $NextToken
 * @property int $MaxResults
 * @property list<Shapes\Filter> $Filters
 * @property bool $DryRun
 */
class DescribeCapacityReservationFleetsRequest extends Request
{
    /**
     * @param array{
     *     CapacityReservationFleetIds?: list<string>,
     *     NextToken?: string,
     *     MaxResults?: int,
     *     Filters?: list<Shapes\Filter>,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
