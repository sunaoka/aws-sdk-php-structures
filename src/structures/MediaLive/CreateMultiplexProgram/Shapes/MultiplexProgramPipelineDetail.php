<?php

namespace Sunaoka\Aws\Structures\MediaLive\CreateMultiplexProgram\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ActiveChannelPipeline
 * @property string|null $PipelineId
 */
class MultiplexProgramPipelineDetail extends Shape
{
    /**
     * @param array{
     *     ActiveChannelPipeline?: string|null,
     *     PipelineId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
