<?php

namespace Sunaoka\Aws\Structures\Macie2\DescribeClassificationJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $jobId
 */
class DescribeClassificationJobRequest extends Request
{
    /**
     * @param array{jobId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
