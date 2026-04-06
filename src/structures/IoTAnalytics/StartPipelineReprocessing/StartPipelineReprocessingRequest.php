<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics\StartPipelineReprocessing;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $pipelineName
 * @property \Aws\Api\DateTimeResult|null $startTime
 * @property \Aws\Api\DateTimeResult|null $endTime
 * @property Shapes\ChannelMessages|null $channelMessages
 */
class StartPipelineReprocessingRequest extends Request
{
    /**
     * @param array{
     *     pipelineName: string,
     *     startTime?: \Aws\Api\DateTimeResult|null,
     *     endTime?: \Aws\Api\DateTimeResult|null,
     *     channelMessages?: Shapes\ChannelMessages|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
