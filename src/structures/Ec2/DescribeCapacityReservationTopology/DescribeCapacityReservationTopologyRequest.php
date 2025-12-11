<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeCapacityReservationTopology;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property string|null $NextToken
 * @property int<1, 10>|null $MaxResults
 * @property list<string>|null $CapacityReservationIds
 * @property list<Shapes\Filter>|null $Filters
 */
class DescribeCapacityReservationTopologyRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 10>|null,
     *     CapacityReservationIds?: list<string>|null,
     *     Filters?: list<Shapes\Filter>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
