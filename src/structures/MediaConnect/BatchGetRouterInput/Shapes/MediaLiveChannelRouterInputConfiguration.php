<?php

namespace Sunaoka\Aws\Structures\MediaConnect\BatchGetRouterInput\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $MediaLiveChannelArn
 * @property 'PIPELINE_0'|'PIPELINE_1'|null $MediaLivePipelineId
 * @property string|null $MediaLiveChannelOutputName
 * @property MediaLiveTransitEncryption $SourceTransitDecryption
 */
class MediaLiveChannelRouterInputConfiguration extends Shape
{
    /**
     * @param array{
     *     MediaLiveChannelArn?: string|null,
     *     MediaLivePipelineId?: 'PIPELINE_0'|'PIPELINE_1'|null,
     *     MediaLiveChannelOutputName?: string|null,
     *     SourceTransitDecryption: MediaLiveTransitEncryption
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
