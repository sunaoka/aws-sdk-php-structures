<?php

namespace Sunaoka\Aws\Structures\MediaConnect\GetRouterOutput\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $MediaLiveInputArn
 * @property 'PIPELINE_0'|'PIPELINE_1'|null $MediaLivePipelineId
 * @property MediaLiveTransitEncryption $DestinationTransitEncryption
 */
class MediaLiveInputRouterOutputConfiguration extends Shape
{
    /**
     * @param array{
     *     MediaLiveInputArn?: string|null,
     *     MediaLivePipelineId?: 'PIPELINE_0'|'PIPELINE_1'|null,
     *     DestinationTransitEncryption: MediaLiveTransitEncryption
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
