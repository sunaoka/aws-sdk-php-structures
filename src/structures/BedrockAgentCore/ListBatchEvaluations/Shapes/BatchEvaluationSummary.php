<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\ListBatchEvaluations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $batchEvaluationId
 * @property string $batchEvaluationArn
 * @property string $batchEvaluationName
 * @property 'PENDING'|'IN_PROGRESS'|'COMPLETED'|'COMPLETED_WITH_ERRORS'|'FAILED'|'STOPPING'|'STOPPED'|'DELETING' $status
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string|null $description
 * @property list<Evaluator>|null $evaluators
 * @property list<Insight>|null $insights
 * @property EvaluationJobResults|null $evaluationResults
 * @property list<string>|null $errorDetails
 * @property string|null $kmsKeyArn
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 */
class BatchEvaluationSummary extends Shape
{
    /**
     * @param array{
     *     batchEvaluationId: string,
     *     batchEvaluationArn: string,
     *     batchEvaluationName: string,
     *     status: 'PENDING'|'IN_PROGRESS'|'COMPLETED'|'COMPLETED_WITH_ERRORS'|'FAILED'|'STOPPING'|'STOPPED'|'DELETING',
     *     createdAt: \Aws\Api\DateTimeResult,
     *     description?: string|null,
     *     evaluators?: list<Evaluator>|null,
     *     insights?: list<Insight>|null,
     *     evaluationResults?: EvaluationJobResults|null,
     *     errorDetails?: list<string>|null,
     *     kmsKeyArn?: string|null,
     *     updatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
