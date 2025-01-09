<?php

namespace Sunaoka\Aws\Structures\CodeGuruProfiler\GetPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $profilingGroupName
 */
class GetPolicyRequest extends Request
{
    /**
     * @param array{profilingGroupName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
