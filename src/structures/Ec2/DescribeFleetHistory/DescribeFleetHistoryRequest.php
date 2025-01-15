<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeFleetHistory;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property 'instance-change'|'fleet-change'|'service-error'|null $EventType
 * @property int|null $MaxResults
 * @property string|null $NextToken
 * @property string $FleetId
 * @property \Aws\Api\DateTimeResult $StartTime
 */
class DescribeFleetHistoryRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     EventType?: 'instance-change'|'fleet-change'|'service-error'|null,
     *     MaxResults?: int|null,
     *     NextToken?: string|null,
     *     FleetId: string,
     *     StartTime: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
