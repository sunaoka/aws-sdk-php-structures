<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\StopBatchEvaluation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $batchEvaluationId
 */
class StopBatchEvaluationRequest extends Request
{
    /**
     * @param array{batchEvaluationId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
