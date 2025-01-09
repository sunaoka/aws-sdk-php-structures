<?php

namespace Sunaoka\Aws\Structures\DataPipeline\PollForTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $taskId
 * @property string $pipelineId
 * @property string $attemptId
 * @property array<string, PipelineObject> $objects
 */
class TaskObject extends Shape
{
    /**
     * @param array{
     *     taskId?: string,
     *     pipelineId?: string,
     *     attemptId?: string,
     *     objects?: array<string, PipelineObject>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
