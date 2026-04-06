<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateOptimizationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'EAGLE' $Technique
 * @property ModelSpeculativeDecodingTrainingDataSource|null $TrainingDataSource
 */
class ModelSpeculativeDecodingConfig extends Shape
{
    /**
     * @param array{
     *     Technique: 'EAGLE',
     *     TrainingDataSource?: ModelSpeculativeDecodingTrainingDataSource|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
