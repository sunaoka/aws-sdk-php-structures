<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\GetBatchEvaluation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $sessionId
 * @property string $approachTaken
 * @property string $finalOutcome
 */
class ExecutionSummaryAffectedSession extends Shape
{
    /**
     * @param array{
     *     sessionId: string,
     *     approachTaken: string,
     *     finalOutcome: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
