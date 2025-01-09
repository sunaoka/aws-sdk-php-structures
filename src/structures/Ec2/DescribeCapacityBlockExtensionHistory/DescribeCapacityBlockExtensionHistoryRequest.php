<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeCapacityBlockExtensionHistory;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $CapacityReservationIds
 * @property string $NextToken
 * @property int<1, 1000> $MaxResults
 * @property list<Shapes\Filter> $Filters
 * @property bool $DryRun
 */
class DescribeCapacityBlockExtensionHistoryRequest extends Request
{
    /**
     * @param array{
     *     CapacityReservationIds?: list<string>,
     *     NextToken?: string,
     *     MaxResults?: int<1, 1000>,
     *     Filters?: list<Shapes\Filter>,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
