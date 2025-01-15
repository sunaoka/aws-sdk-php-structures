<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics\SampleChannelData;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $channelName
 * @property int<1, 10>|null $maxMessages
 * @property \Aws\Api\DateTimeResult|null $startTime
 * @property \Aws\Api\DateTimeResult|null $endTime
 */
class SampleChannelDataRequest extends Request
{
    /**
     * @param array{
     *     channelName: string,
     *     maxMessages?: int<1, 10>|null,
     *     startTime?: \Aws\Api\DateTimeResult|null,
     *     endTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
