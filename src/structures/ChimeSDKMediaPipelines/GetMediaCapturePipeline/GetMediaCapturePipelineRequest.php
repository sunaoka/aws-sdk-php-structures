<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMediaPipelines\GetMediaCapturePipeline;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $MediaPipelineId
 */
class GetMediaCapturePipelineRequest extends Request
{
    /**
     * @param array{MediaPipelineId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
