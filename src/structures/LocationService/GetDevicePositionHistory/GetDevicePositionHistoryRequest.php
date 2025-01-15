<?php

namespace Sunaoka\Aws\Structures\LocationService\GetDevicePositionHistory;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TrackerName
 * @property string $DeviceId
 * @property string|null $NextToken
 * @property \Aws\Api\DateTimeResult|null $StartTimeInclusive
 * @property \Aws\Api\DateTimeResult|null $EndTimeExclusive
 * @property int<1, 100>|null $MaxResults
 */
class GetDevicePositionHistoryRequest extends Request
{
    /**
     * @param array{
     *     TrackerName: string,
     *     DeviceId: string,
     *     NextToken?: string|null,
     *     StartTimeInclusive?: \Aws\Api\DateTimeResult|null,
     *     EndTimeExclusive?: \Aws\Api\DateTimeResult|null,
     *     MaxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
