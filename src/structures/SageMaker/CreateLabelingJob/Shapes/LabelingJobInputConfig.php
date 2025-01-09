<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateLabelingJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LabelingJobDataSource $DataSource
 * @property LabelingJobDataAttributes $DataAttributes
 */
class LabelingJobInputConfig extends Shape
{
    /**
     * @param array{
     *     DataSource: LabelingJobDataSource,
     *     DataAttributes?: LabelingJobDataAttributes
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
