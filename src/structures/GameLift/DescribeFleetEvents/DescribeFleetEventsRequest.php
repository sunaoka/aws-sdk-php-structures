<?php

namespace Sunaoka\Aws\Structures\GameLift\DescribeFleetEvents;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FleetId
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property \Aws\Api\DateTimeResult $EndTime
 * @property int $Limit
 * @property string $NextToken
 */
class DescribeFleetEventsRequest extends Request
{
    /**
     * @param array{
     *     FleetId: string,
     *     StartTime?: \Aws\Api\DateTimeResult,
     *     EndTime?: \Aws\Api\DateTimeResult,
     *     Limit?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
