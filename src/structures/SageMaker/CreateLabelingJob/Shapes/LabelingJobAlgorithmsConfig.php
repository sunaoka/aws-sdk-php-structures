<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateLabelingJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $LabelingJobAlgorithmSpecificationArn
 * @property string|null $InitialActiveLearningModelArn
 * @property LabelingJobResourceConfig|null $LabelingJobResourceConfig
 */
class LabelingJobAlgorithmsConfig extends Shape
{
    /**
     * @param array{
     *     LabelingJobAlgorithmSpecificationArn: string,
     *     InitialActiveLearningModelArn?: string|null,
     *     LabelingJobResourceConfig?: LabelingJobResourceConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
