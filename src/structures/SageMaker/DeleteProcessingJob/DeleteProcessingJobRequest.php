<?php

namespace Sunaoka\Aws\Structures\SageMaker\DeleteProcessingJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ProcessingJobName
 */
class DeleteProcessingJobRequest extends Request
{
    /**
     * @param array{ProcessingJobName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
