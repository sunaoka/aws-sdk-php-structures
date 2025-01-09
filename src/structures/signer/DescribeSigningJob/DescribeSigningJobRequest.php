<?php

namespace Sunaoka\Aws\Structures\signer\DescribeSigningJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $jobId
 */
class DescribeSigningJobRequest extends Request
{
    /**
     * @param array{jobId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
