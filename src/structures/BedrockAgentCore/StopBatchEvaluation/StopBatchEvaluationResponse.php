<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\StopBatchEvaluation;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $batchEvaluationId
 * @property string $batchEvaluationArn
 * @property 'PENDING'|'IN_PROGRESS'|'COMPLETED'|'COMPLETED_WITH_ERRORS'|'FAILED'|'STOPPING'|'STOPPED'|'DELETING' $status
 * @property string|null $description
 */
class StopBatchEvaluationResponse extends Response
{
}
