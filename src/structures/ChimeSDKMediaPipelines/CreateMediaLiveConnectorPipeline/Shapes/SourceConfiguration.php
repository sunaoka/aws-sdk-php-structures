<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMediaPipelines\CreateMediaLiveConnectorPipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SelectedVideoStreams $SelectedVideoStreams
 */
class SourceConfiguration extends Shape
{
    /**
     * @param array{SelectedVideoStreams?: SelectedVideoStreams} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
