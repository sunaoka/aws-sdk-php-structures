<?php

namespace Sunaoka\Aws\Structures\DataPipeline\PollForTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $taskId
 * @property string|null $pipelineId
 * @property string|null $attemptId
 * @property array<string, PipelineObject>|null $objects
 */
class TaskObject extends Shape
{
    /**
     * @param array{
     *     taskId?: string|null,
     *     pipelineId?: string|null,
     *     attemptId?: string|null,
     *     objects?: array<string, PipelineObject>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
