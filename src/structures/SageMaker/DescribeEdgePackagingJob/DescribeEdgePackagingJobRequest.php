<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeEdgePackagingJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EdgePackagingJobName
 */
class DescribeEdgePackagingJobRequest extends Request
{
    /**
     * @param array{EdgePackagingJobName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
