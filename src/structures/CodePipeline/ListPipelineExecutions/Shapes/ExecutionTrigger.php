<?php

namespace Sunaoka\Aws\Structures\CodePipeline\ListPipelineExecutions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CreatePipeline'|'StartPipelineExecution'|'PollForSourceChanges'|'Webhook'|'CloudWatchEvent'|'PutActionRevision'|null $triggerType
 * @property string|null $triggerDetail
 */
class ExecutionTrigger extends Shape
{
    /**
     * @param array{
     *     triggerType?: 'CreatePipeline'|'StartPipelineExecution'|'PollForSourceChanges'|'Webhook'|'CloudWatchEvent'|'PutActionRevision'|null,
     *     triggerDetail?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
