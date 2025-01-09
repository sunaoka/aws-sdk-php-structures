<?php

namespace Sunaoka\Aws\Structures\CodeGuruProfiler\DescribeProfilingGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $profilingGroupName
 */
class DescribeProfilingGroupRequest extends Request
{
    /**
     * @param array{profilingGroupName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
