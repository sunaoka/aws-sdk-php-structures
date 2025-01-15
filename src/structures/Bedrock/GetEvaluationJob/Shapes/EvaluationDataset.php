<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetEvaluationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property EvaluationDatasetLocation|null $datasetLocation
 */
class EvaluationDataset extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     datasetLocation?: EvaluationDatasetLocation|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
