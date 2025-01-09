<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeLabelingJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $LabelingJobAlgorithmSpecificationArn
 * @property string $InitialActiveLearningModelArn
 * @property LabelingJobResourceConfig $LabelingJobResourceConfig
 */
class LabelingJobAlgorithmsConfig extends Shape
{
    /**
     * @param array{
     *     LabelingJobAlgorithmSpecificationArn: string,
     *     InitialActiveLearningModelArn?: string,
     *     LabelingJobResourceConfig?: LabelingJobResourceConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
