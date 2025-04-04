<?php

namespace Sunaoka\Aws\Structures\CodeGuruProfiler\DeleteProfilingGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $profilingGroupName
 */
class DeleteProfilingGroupRequest extends Request
{
    /**
     * @param array{profilingGroupName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
