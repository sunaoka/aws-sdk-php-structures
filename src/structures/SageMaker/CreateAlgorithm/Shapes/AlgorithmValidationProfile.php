<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateAlgorithm\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ProfileName
 * @property TrainingJobDefinition $TrainingJobDefinition
 * @property TransformJobDefinition $TransformJobDefinition
 */
class AlgorithmValidationProfile extends Shape
{
    /**
     * @param array{
     *     ProfileName: string,
     *     TrainingJobDefinition: TrainingJobDefinition,
     *     TransformJobDefinition?: TransformJobDefinition
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
