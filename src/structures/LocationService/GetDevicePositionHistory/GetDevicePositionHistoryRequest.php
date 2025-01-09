<?php

namespace Sunaoka\Aws\Structures\LocationService\GetDevicePositionHistory;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TrackerName
 * @property string $DeviceId
 * @property string $NextToken
 * @property \Aws\Api\DateTimeResult $StartTimeInclusive
 * @property \Aws\Api\DateTimeResult $EndTimeExclusive
 * @property int $MaxResults
 */
class GetDevicePositionHistoryRequest extends Request
{
    /**
     * @param array{
     *     TrackerName: string,
     *     DeviceId: string,
     *     NextToken?: string,
     *     StartTimeInclusive?: \Aws\Api\DateTimeResult,
     *     EndTimeExclusive?: \Aws\Api\DateTimeResult,
     *     MaxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
