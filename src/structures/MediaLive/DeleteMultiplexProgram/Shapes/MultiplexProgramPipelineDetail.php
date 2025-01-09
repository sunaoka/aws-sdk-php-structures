<?php

namespace Sunaoka\Aws\Structures\MediaLive\DeleteMultiplexProgram\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ActiveChannelPipeline
 * @property string $PipelineId
 */
class MultiplexProgramPipelineDetail extends Shape
{
    /**
     * @param array{
     *     ActiveChannelPipeline?: string,
     *     PipelineId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
