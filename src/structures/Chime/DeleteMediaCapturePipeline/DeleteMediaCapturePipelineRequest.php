<?php

namespace Sunaoka\Aws\Structures\Chime\DeleteMediaCapturePipeline;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $MediaPipelineId
 */
class DeleteMediaCapturePipelineRequest extends Request
{
    /**
     * @param array{MediaPipelineId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
