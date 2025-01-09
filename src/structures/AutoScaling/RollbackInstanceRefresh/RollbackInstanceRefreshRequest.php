<?php

namespace Sunaoka\Aws\Structures\AutoScaling\RollbackInstanceRefresh;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AutoScalingGroupName
 */
class RollbackInstanceRefreshRequest extends Request
{
    /**
     * @param array{AutoScalingGroupName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
