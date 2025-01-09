<?php

namespace Sunaoka\Aws\Structures\SageMaker\StopLabelingJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LabelingJobName
 */
class StopLabelingJobRequest extends Request
{
    /**
     * @param array{LabelingJobName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
