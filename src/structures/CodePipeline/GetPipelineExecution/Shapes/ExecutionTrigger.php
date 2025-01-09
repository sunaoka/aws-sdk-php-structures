<?php

namespace Sunaoka\Aws\Structures\CodePipeline\GetPipelineExecution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CreatePipeline'|'StartPipelineExecution'|'PollForSourceChanges'|'Webhook'|'CloudWatchEvent'|'PutActionRevision'|'WebhookV2'|'ManualRollback'|'AutomatedRollback' $triggerType
 * @property string $triggerDetail
 */
class ExecutionTrigger extends Shape
{
    /**
     * @param array{
     *     triggerType?: 'CreatePipeline'|'StartPipelineExecution'|'PollForSourceChanges'|'Webhook'|'CloudWatchEvent'|'PutActionRevision'|'WebhookV2'|'ManualRollback'|'AutomatedRollback',
     *     triggerDetail?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
