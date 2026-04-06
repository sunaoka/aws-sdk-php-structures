<?php

namespace Sunaoka\Aws\Structures\Bedrock\CreateEvaluationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Summarization'|'Classification'|'QuestionAndAnswer'|'Generation'|'Custom' $taskType
 * @property EvaluationDataset $dataset
 * @property list<string> $metricNames
 */
class EvaluationDatasetMetricConfig extends Shape
{
    /**
     * @param array{
     *     taskType: 'Summarization'|'Classification'|'QuestionAndAnswer'|'Generation'|'Custom',
     *     dataset: EvaluationDataset,
     *     metricNames: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
