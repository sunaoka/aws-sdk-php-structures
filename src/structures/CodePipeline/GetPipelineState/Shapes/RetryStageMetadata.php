<?php

namespace Sunaoka\Aws\Structures\CodePipeline\GetPipelineState\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $autoStageRetryAttempt
 * @property int $manualStageRetryAttempt
 * @property 'AutomatedStageRetry'|'ManualStageRetry' $latestRetryTrigger
 */
class RetryStageMetadata extends Shape
{
    /**
     * @param array{
     *     autoStageRetryAttempt?: int,
     *     manualStageRetryAttempt?: int,
     *     latestRetryTrigger?: 'AutomatedStageRetry'|'ManualStageRetry'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
