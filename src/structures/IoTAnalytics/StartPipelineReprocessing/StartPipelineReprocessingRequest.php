<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics\StartPipelineReprocessing;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $pipelineName
 * @property \Aws\Api\DateTimeResult $startTime
 * @property \Aws\Api\DateTimeResult $endTime
 * @property Shapes\ChannelMessages $channelMessages
 */
class StartPipelineReprocessingRequest extends Request
{
    /**
     * @param array{
     *     pipelineName: string,
     *     startTime?: \Aws\Api\DateTimeResult,
     *     endTime?: \Aws\Api\DateTimeResult,
     *     channelMessages?: Shapes\ChannelMessages
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
