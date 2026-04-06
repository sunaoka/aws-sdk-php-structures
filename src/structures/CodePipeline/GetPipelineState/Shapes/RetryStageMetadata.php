<?php

namespace Sunaoka\Aws\Structures\CodePipeline\GetPipelineState\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, max>|null $autoStageRetryAttempt
 * @property int<1, max>|null $manualStageRetryAttempt
 * @property 'AutomatedStageRetry'|'ManualStageRetry'|null $latestRetryTrigger
 */
class RetryStageMetadata extends Shape
{
    /**
     * @param array{
     *     autoStageRetryAttempt?: int<1, max>|null,
     *     manualStageRetryAttempt?: int<1, max>|null,
     *     latestRetryTrigger?: 'AutomatedStageRetry'|'ManualStageRetry'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
