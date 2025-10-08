<?php

namespace Sunaoka\Aws\Structures\Batch\DescribeServiceJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $jobId
 */
class DescribeServiceJobRequest extends Request
{
    /**
     * @param array{jobId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
