<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetEvaluationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property EvaluationDatasetLocation $datasetLocation
 */
class EvaluationDataset extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     datasetLocation?: EvaluationDatasetLocation
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
