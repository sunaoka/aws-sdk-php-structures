<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMediaPipelines\CreateMediaInsightsPipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $StreamArn
 */
class RecordingStreamConfiguration extends Shape
{
    /**
     * @param array{StreamArn?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
