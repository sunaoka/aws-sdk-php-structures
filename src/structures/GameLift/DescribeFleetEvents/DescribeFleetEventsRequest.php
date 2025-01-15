<?php

namespace Sunaoka\Aws\Structures\GameLift\DescribeFleetEvents;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FleetId
 * @property \Aws\Api\DateTimeResult|null $StartTime
 * @property \Aws\Api\DateTimeResult|null $EndTime
 * @property int<1, max>|null $Limit
 * @property string|null $NextToken
 */
class DescribeFleetEventsRequest extends Request
{
    /**
     * @param array{
     *     FleetId: string,
     *     StartTime?: \Aws\Api\DateTimeResult|null,
     *     EndTime?: \Aws\Api\DateTimeResult|null,
     *     Limit?: int<1, max>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
