<?php

namespace Sunaoka\Aws\Structures\Chime\GetMediaCapturePipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SelectedVideoStreams|null $SelectedVideoStreams
 */
class SourceConfiguration extends Shape
{
    /**
     * @param array{SelectedVideoStreams?: SelectedVideoStreams|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
