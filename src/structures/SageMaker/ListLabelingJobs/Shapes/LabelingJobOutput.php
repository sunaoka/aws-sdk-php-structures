<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListLabelingJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $OutputDatasetS3Uri
 * @property string|null $FinalActiveLearningModelArn
 */
class LabelingJobOutput extends Shape
{
    /**
     * @param array{
     *     OutputDatasetS3Uri: string,
     *     FinalActiveLearningModelArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
