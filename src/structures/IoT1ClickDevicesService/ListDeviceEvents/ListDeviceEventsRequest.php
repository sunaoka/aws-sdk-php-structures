<?php

namespace Sunaoka\Aws\Structures\IoT1ClickDevicesService\ListDeviceEvents;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DeviceId
 * @property \Aws\Api\DateTimeResult $FromTimeStamp
 * @property int $MaxResults
 * @property string $NextToken
 * @property \Aws\Api\DateTimeResult $ToTimeStamp
 */
class ListDeviceEventsRequest extends Request
{
    /**
     * @param array{
     *     DeviceId: string,
     *     FromTimeStamp: \Aws\Api\DateTimeResult,
     *     MaxResults?: int,
     *     NextToken?: string,
     *     ToTimeStamp: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
