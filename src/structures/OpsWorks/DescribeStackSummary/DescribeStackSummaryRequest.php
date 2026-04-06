<?php

namespace Sunaoka\Aws\Structures\OpsWorks\DescribeStackSummary;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StackId
 */
class DescribeStackSummaryRequest extends Request
{
    /**
     * @param array{StackId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
