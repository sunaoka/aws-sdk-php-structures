<?php

namespace Sunaoka\Aws\Structures\SageMakerTrainingSessionRuntime\ExecuteTrainingOperation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $mergeWeights
 * @property string|null $description
 */
class SaveWeightsConfig extends Shape
{
    /**
     * @param array{
     *     mergeWeights?: bool|null,
     *     description?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
