<?php

namespace Sunaoka\Aws\Structures\SageMaker\StopEdgePackagingJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EdgePackagingJobName
 */
class StopEdgePackagingJobRequest extends Request
{
    /**
     * @param array{EdgePackagingJobName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
