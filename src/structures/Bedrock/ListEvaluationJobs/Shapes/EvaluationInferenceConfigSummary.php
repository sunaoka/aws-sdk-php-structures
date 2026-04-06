<?php

namespace Sunaoka\Aws\Structures\Bedrock\ListEvaluationJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EvaluationModelConfigSummary|null $modelConfigSummary
 * @property EvaluationRagConfigSummary|null $ragConfigSummary
 */
class EvaluationInferenceConfigSummary extends Shape
{
    /**
     * @param array{
     *     modelConfigSummary?: EvaluationModelConfigSummary|null,
     *     ragConfigSummary?: EvaluationRagConfigSummary|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
