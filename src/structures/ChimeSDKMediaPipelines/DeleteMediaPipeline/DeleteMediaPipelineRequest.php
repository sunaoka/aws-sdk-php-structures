<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMediaPipelines\DeleteMediaPipeline;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $MediaPipelineId
 */
class DeleteMediaPipelineRequest extends Request
{
    /**
     * @param array{MediaPipelineId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
