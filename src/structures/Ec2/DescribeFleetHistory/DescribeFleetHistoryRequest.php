<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeFleetHistory;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DryRun
 * @property 'instance-change'|'fleet-change'|'service-error' $EventType
 * @property int $MaxResults
 * @property string $NextToken
 * @property string $FleetId
 * @property \Aws\Api\DateTimeResult $StartTime
 */
class DescribeFleetHistoryRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool,
     *     EventType?: 'instance-change'|'fleet-change'|'service-error',
     *     MaxResults?: int,
     *     NextToken?: string,
     *     FleetId: string,
     *     StartTime: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
