<?php

namespace Sunaoka\Aws\Structures\MediaLive\RestartChannelPipelines;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ChannelId
 * @property list<'PIPELINE_0'|'PIPELINE_1'>|null $PipelineIds
 */
class RestartChannelPipelinesRequest extends Request
{
    /**
     * @param array{
     *     ChannelId: string,
     *     PipelineIds?: list<'PIPELINE_0'|'PIPELINE_1'>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
