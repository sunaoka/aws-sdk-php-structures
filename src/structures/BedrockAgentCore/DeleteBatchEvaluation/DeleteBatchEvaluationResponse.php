<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\DeleteBatchEvaluation;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $batchEvaluationId
 * @property string $batchEvaluationArn
 * @property 'PENDING'|'IN_PROGRESS'|'COMPLETED'|'COMPLETED_WITH_ERRORS'|'FAILED'|'STOPPING'|'STOPPED'|'DELETING' $status
 */
class DeleteBatchEvaluationResponse extends Response
{
}
