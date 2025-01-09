<?php

namespace Sunaoka\Aws\Structures\CodePipeline\GetPipelineState\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, max> $autoStageRetryAttempt
 * @property int<1, max> $manualStageRetryAttempt
 * @property 'AutomatedStageRetry'|'ManualStageRetry' $latestRetryTrigger
 */
class RetryStageMetadata extends Shape
{
    /**
     * @param array{
     *     autoStageRetryAttempt?: int<1, max>,
     *     manualStageRetryAttempt?: int<1, max>,
     *     latestRetryTrigger?: 'AutomatedStageRetry'|'ManualStageRetry'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
