<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\StartBatchEvaluation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $batchEvaluationName
 * @property list<Shapes\Evaluator>|null $evaluators
 * @property list<Shapes\Insight>|null $insights
 * @property Shapes\DataSourceConfig $dataSourceConfig
 * @property string|null $clientToken
 * @property Shapes\EvaluationMetadata|null $evaluationMetadata
 * @property array<string, string>|null $tags
 * @property string|null $kmsKeyArn
 * @property string|null $description
 */
class StartBatchEvaluationRequest extends Request
{
    /**
     * @param array{
     *     batchEvaluationName: string,
     *     evaluators?: list<Shapes\Evaluator>|null,
     *     insights?: list<Shapes\Insight>|null,
     *     dataSourceConfig: Shapes\DataSourceConfig,
     *     clientToken?: string|null,
     *     evaluationMetadata?: Shapes\EvaluationMetadata|null,
     *     tags?: array<string, string>|null,
     *     kmsKeyArn?: string|null,
     *     description?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
