<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeLabelingJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $OutputDatasetS3Uri
 * @property string $FinalActiveLearningModelArn
 */
class LabelingJobOutput extends Shape
{
    /**
     * @param array{
     *     OutputDatasetS3Uri: string,
     *     FinalActiveLearningModelArn?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
