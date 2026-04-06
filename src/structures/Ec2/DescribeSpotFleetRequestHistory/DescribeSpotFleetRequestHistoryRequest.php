<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeSpotFleetRequestHistory;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property 'instanceChange'|'fleetRequestChange'|'error'|'information'|null $EventType
 * @property int<1, 1000>|null $MaxResults
 * @property string|null $NextToken
 * @property string $SpotFleetRequestId
 * @property \Aws\Api\DateTimeResult $StartTime
 */
class DescribeSpotFleetRequestHistoryRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     EventType?: 'instanceChange'|'fleetRequestChange'|'error'|'information'|null,
     *     MaxResults?: int<1, 1000>|null,
     *     NextToken?: string|null,
     *     SpotFleetRequestId: string,
     *     StartTime: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
