<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMediaPipelines\GetMediaPipeline;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $MediaPipelineId
 */
class GetMediaPipelineRequest extends Request
{
    /**
     * @param array{MediaPipelineId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
