<?php

namespace Sunaoka\Aws\Structures\CodePipeline\GetPipelineExecution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CreatePipeline'|'StartPipelineExecution'|'PollForSourceChanges'|'Webhook'|'CloudWatchEvent'|'PutActionRevision'|'WebhookV2'|'ManualRollback'|'AutomatedRollback'|null $triggerType
 * @property string|null $triggerDetail
 */
class ExecutionTrigger extends Shape
{
    /**
     * @param array{
     *     triggerType?: 'CreatePipeline'|'StartPipelineExecution'|'PollForSourceChanges'|'Webhook'|'CloudWatchEvent'|'PutActionRevision'|'WebhookV2'|'ManualRollback'|'AutomatedRollback'|null,
     *     triggerDetail?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
