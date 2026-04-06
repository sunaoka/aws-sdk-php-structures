<?php

namespace Sunaoka\Aws\Structures\MediaLive\StartChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ActiveInputAttachmentName
 * @property string|null $ActiveInputSwitchActionName
 * @property string|null $ActiveMotionGraphicsActionName
 * @property string|null $ActiveMotionGraphicsUri
 * @property string|null $PipelineId
 * @property ChannelEngineVersionResponse|null $ChannelEngineVersion
 */
class PipelineDetail extends Shape
{
    /**
     * @param array{
     *     ActiveInputAttachmentName?: string|null,
     *     ActiveInputSwitchActionName?: string|null,
     *     ActiveMotionGraphicsActionName?: string|null,
     *     ActiveMotionGraphicsUri?: string|null,
     *     PipelineId?: string|null,
     *     ChannelEngineVersion?: ChannelEngineVersionResponse|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
