<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ActiveInputAttachmentName
 * @property string $ActiveInputSwitchActionName
 * @property string $ActiveMotionGraphicsActionName
 * @property string $ActiveMotionGraphicsUri
 * @property string $PipelineId
 * @property ChannelEngineVersionResponse $ChannelEngineVersion
 */
class PipelineDetail extends Shape
{
    /**
     * @param array{
     *     ActiveInputAttachmentName?: string,
     *     ActiveInputSwitchActionName?: string,
     *     ActiveMotionGraphicsActionName?: string,
     *     ActiveMotionGraphicsUri?: string,
     *     PipelineId?: string,
     *     ChannelEngineVersion?: ChannelEngineVersionResponse
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
