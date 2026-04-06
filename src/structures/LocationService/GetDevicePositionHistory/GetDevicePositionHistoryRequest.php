<?php

namespace Sunaoka\Aws\Structures\LocationService\GetDevicePositionHistory;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DeviceId
 * @property \Aws\Api\DateTimeResult|null $EndTimeExclusive
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 * @property \Aws\Api\DateTimeResult|null $StartTimeInclusive
 * @property string $TrackerName
 */
class GetDevicePositionHistoryRequest extends Request
{
    /**
     * @param array{
     *     DeviceId: string,
     *     EndTimeExclusive?: \Aws\Api\DateTimeResult|null,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null,
     *     StartTimeInclusive?: \Aws\Api\DateTimeResult|null,
     *     TrackerName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
