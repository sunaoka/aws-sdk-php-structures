<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMediaPipelines\GetMediaPipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'MediaCapturePipeline' $Type
 * @property MediaCapturePipelineSourceConfiguration $MediaCapturePipelineSourceConfiguration
 */
class ConcatenationSource extends Shape
{
    /**
     * @param array{
     *     Type: 'MediaCapturePipeline',
     *     MediaCapturePipelineSourceConfiguration: MediaCapturePipelineSourceConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
