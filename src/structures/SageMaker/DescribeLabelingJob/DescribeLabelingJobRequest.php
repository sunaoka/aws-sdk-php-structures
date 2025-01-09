<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeLabelingJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LabelingJobName
 */
class DescribeLabelingJobRequest extends Request
{
    /**
     * @param array{LabelingJobName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
