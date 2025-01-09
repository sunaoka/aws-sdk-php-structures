<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeProcessingJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ProcessingJobName
 */
class DescribeProcessingJobRequest extends Request
{
    /**
     * @param array{ProcessingJobName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
