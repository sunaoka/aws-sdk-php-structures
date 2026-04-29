<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\StartBatchEvaluation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $batchEvaluationName
 * @property list<Shapes\Evaluator>|null $evaluators
 * @property Shapes\DataSourceConfig $dataSourceConfig
 * @property string|null $clientToken
 * @property Shapes\EvaluationMetadata|null $evaluationMetadata
 * @property string|null $description
 */
class StartBatchEvaluationRequest extends Request
{
    /**
     * @param array{
     *     batchEvaluationName: string,
     *     evaluators?: list<Shapes\Evaluator>|null,
     *     dataSourceConfig: Shapes\DataSourceConfig,
     *     clientToken?: string|null,
     *     evaluationMetadata?: Shapes\EvaluationMetadata|null,
     *     description?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
