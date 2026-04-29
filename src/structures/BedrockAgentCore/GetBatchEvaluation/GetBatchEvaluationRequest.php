<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\GetBatchEvaluation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $batchEvaluationId
 */
class GetBatchEvaluationRequest extends Request
{
    /**
     * @param array{batchEvaluationId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
