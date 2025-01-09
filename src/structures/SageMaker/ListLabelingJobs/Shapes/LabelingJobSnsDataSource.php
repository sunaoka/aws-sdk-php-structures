<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListLabelingJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SnsTopicArn
 */
class LabelingJobSnsDataSource extends Shape
{
    /**
     * @param array{SnsTopicArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
