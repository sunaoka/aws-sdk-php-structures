<?php

namespace Sunaoka\Aws\Structures\MediaLive\BatchUpdateSchedule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PIPELINE_0'|'PIPELINE_1' $PipelineId
 */
class PipelinePauseStateSettings extends Shape
{
    /**
     * @param array{PipelineId: 'PIPELINE_0'|'PIPELINE_1'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
