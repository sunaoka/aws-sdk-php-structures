<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateLabelingJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LabelingJobS3DataSource $S3DataSource
 * @property LabelingJobSnsDataSource $SnsDataSource
 */
class LabelingJobDataSource extends Shape
{
    /**
     * @param array{
     *     S3DataSource?: LabelingJobS3DataSource,
     *     SnsDataSource?: LabelingJobSnsDataSource
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
