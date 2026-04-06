<?php

namespace Sunaoka\Aws\Structures\AutoScaling\CancelInstanceRefresh;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AutoScalingGroupName
 */
class CancelInstanceRefreshRequest extends Request
{
    /**
     * @param array{AutoScalingGroupName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
