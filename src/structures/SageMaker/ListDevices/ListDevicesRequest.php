<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListDevices;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $NextToken
 * @property int<min, 100>|null $MaxResults
 * @property \Aws\Api\DateTimeResult|null $LatestHeartbeatAfter
 * @property string|null $ModelName
 * @property string|null $DeviceFleetName
 */
class ListDevicesRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string|null,
     *     MaxResults?: int<min, 100>|null,
     *     LatestHeartbeatAfter?: \Aws\Api\DateTimeResult|null,
     *     ModelName?: string|null,
     *     DeviceFleetName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
