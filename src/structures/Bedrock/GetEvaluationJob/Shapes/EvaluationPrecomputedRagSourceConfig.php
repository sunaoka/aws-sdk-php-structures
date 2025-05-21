<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetEvaluationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EvaluationPrecomputedRetrieveSourceConfig|null $retrieveSourceConfig
 * @property EvaluationPrecomputedRetrieveAndGenerateSourceConfig|null $retrieveAndGenerateSourceConfig
 */
class EvaluationPrecomputedRagSourceConfig extends Shape
{
    /**
     * @param array{
     *     retrieveSourceConfig?: EvaluationPrecomputedRetrieveSourceConfig|null,
     *     retrieveAndGenerateSourceConfig?: EvaluationPrecomputedRetrieveAndGenerateSourceConfig|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
