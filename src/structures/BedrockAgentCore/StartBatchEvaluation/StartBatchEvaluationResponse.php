<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\StartBatchEvaluation;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $batchEvaluationId
 * @property string $batchEvaluationArn
 * @property string $batchEvaluationName
 * @property list<Shapes\Evaluator>|null $evaluators
 * @property 'PENDING'|'IN_PROGRESS'|'COMPLETED'|'COMPLETED_WITH_ERRORS'|'FAILED'|'STOPPING'|'STOPPED'|'DELETING' $status
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property Shapes\OutputConfig|null $outputConfig
 * @property string|null $description
 */
class StartBatchEvaluationResponse extends Response
{
}
