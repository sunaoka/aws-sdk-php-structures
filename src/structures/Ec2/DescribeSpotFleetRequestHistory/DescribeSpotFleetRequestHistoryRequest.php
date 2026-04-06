<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeSpotFleetRequestHistory;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property string $SpotFleetRequestId
 * @property 'instanceChange'|'fleetRequestChange'|'error'|'information'|null $EventType
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property string|null $NextToken
 * @property int<1, 1000>|null $MaxResults
 */
class DescribeSpotFleetRequestHistoryRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     SpotFleetRequestId: string,
     *     EventType?: 'instanceChange'|'fleetRequestChange'|'error'|'information'|null,
     *     StartTime: \Aws\Api\DateTimeResult,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 1000>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
