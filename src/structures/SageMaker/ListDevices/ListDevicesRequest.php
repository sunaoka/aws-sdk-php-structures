<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListDevices;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NextToken
 * @property int $MaxResults
 * @property \Aws\Api\DateTimeResult $LatestHeartbeatAfter
 * @property string $ModelName
 * @property string $DeviceFleetName
 */
class ListDevicesRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string,
     *     MaxResults?: int,
     *     LatestHeartbeatAfter?: \Aws\Api\DateTimeResult,
     *     ModelName?: string,
     *     DeviceFleetName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
