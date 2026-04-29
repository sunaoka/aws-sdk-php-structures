<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\GetBatchEvaluation;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $batchEvaluationId
 * @property string $batchEvaluationArn
 * @property string $batchEvaluationName
 * @property 'PENDING'|'IN_PROGRESS'|'COMPLETED'|'COMPLETED_WITH_ERRORS'|'FAILED'|'STOPPING'|'STOPPED'|'DELETING' $status
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property list<Shapes\Evaluator>|null $evaluators
 * @property Shapes\DataSourceConfig|null $dataSourceConfig
 * @property Shapes\OutputConfig|null $outputConfig
 * @property Shapes\EvaluationJobResults|null $evaluationResults
 * @property list<string>|null $errorDetails
 * @property string|null $description
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 */
class GetBatchEvaluationResponse extends Response
{
}
