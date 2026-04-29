<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\DeleteBatchEvaluation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $batchEvaluationId
 */
class DeleteBatchEvaluationRequest extends Request
{
    /**
     * @param array{batchEvaluationId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
