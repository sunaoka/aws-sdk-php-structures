<?php

namespace Sunaoka\Aws\Structures\FraudDetector\GetEventPredictionMetadata\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $modelId
 * @property string $modelVersion
 * @property string $modelType
 * @property list<ModelVersionEvaluation> $evaluations
 */
class EvaluatedModelVersion extends Shape
{
    /**
     * @param array{
     *     modelId?: string,
     *     modelVersion?: string,
     *     modelType?: string,
     *     evaluations?: list<ModelVersionEvaluation>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
