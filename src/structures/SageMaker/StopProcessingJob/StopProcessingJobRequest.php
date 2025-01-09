<?php

namespace Sunaoka\Aws\Structures\SageMaker\StopProcessingJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ProcessingJobName
 */
class StopProcessingJobRequest extends Request
{
    /**
     * @param array{ProcessingJobName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
