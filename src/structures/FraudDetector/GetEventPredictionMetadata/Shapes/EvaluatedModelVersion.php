<?php

namespace Sunaoka\Aws\Structures\FraudDetector\GetEventPredictionMetadata\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $modelId
 * @property string|null $modelVersion
 * @property string|null $modelType
 * @property list<ModelVersionEvaluation>|null $evaluations
 */
class EvaluatedModelVersion extends Shape
{
    /**
     * @param array{
     *     modelId?: string|null,
     *     modelVersion?: string|null,
     *     modelType?: string|null,
     *     evaluations?: list<ModelVersionEvaluation>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
