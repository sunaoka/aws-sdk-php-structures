<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeSpotFleetRequestHistory;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DryRun
 * @property string $SpotFleetRequestId
 * @property 'instanceChange'|'fleetRequestChange'|'error'|'information' $EventType
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property string $NextToken
 * @property int<1, 1000> $MaxResults
 */
class DescribeSpotFleetRequestHistoryRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool,
     *     SpotFleetRequestId: string,
     *     EventType?: 'instanceChange'|'fleetRequestChange'|'error'|'information',
     *     StartTime: \Aws\Api\DateTimeResult,
     *     NextToken?: string,
     *     MaxResults?: int<1, 1000>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
