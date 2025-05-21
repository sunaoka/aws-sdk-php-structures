<?php

namespace Sunaoka\Aws\Structures\Bedrock\ListEvaluationJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $bedrockModelIdentifiers
 * @property list<string>|null $precomputedInferenceSourceIdentifiers
 */
class EvaluationModelConfigSummary extends Shape
{
    /**
     * @param array{
     *     bedrockModelIdentifiers?: list<string>|null,
     *     precomputedInferenceSourceIdentifiers?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
