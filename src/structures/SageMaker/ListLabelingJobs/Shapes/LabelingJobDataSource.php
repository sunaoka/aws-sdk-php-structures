<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListLabelingJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LabelingJobS3DataSource|null $S3DataSource
 * @property LabelingJobSnsDataSource|null $SnsDataSource
 */
class LabelingJobDataSource extends Shape
{
    /**
     * @param array{
     *     S3DataSource?: LabelingJobS3DataSource|null,
     *     SnsDataSource?: LabelingJobSnsDataSource|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
