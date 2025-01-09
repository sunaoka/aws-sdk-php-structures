<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics\SampleChannelData;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $channelName
 * @property int $maxMessages
 * @property \Aws\Api\DateTimeResult $startTime
 * @property \Aws\Api\DateTimeResult $endTime
 */
class SampleChannelDataRequest extends Request
{
    /**
     * @param array{
     *     channelName: string,
     *     maxMessages?: int,
     *     startTime?: \Aws\Api\DateTimeResult,
     *     endTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
