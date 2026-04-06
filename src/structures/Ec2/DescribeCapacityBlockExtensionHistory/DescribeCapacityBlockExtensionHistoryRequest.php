<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeCapacityBlockExtensionHistory;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $CapacityReservationIds
 * @property string|null $NextToken
 * @property int<1, 1000>|null $MaxResults
 * @property list<Shapes\Filter>|null $Filters
 * @property bool|null $DryRun
 */
class DescribeCapacityBlockExtensionHistoryRequest extends Request
{
    /**
     * @param array{
     *     CapacityReservationIds?: list<string>|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 1000>|null,
     *     Filters?: list<Shapes\Filter>|null,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
