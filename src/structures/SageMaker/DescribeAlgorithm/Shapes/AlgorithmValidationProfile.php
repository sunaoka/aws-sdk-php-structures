<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeAlgorithm\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ProfileName
 * @property TrainingJobDefinition $TrainingJobDefinition
 * @property TransformJobDefinition|null $TransformJobDefinition
 */
class AlgorithmValidationProfile extends Shape
{
    /**
     * @param array{
     *     ProfileName: string,
     *     TrainingJobDefinition: TrainingJobDefinition,
     *     TransformJobDefinition?: TransformJobDefinition|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
