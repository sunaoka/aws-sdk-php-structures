<?php

namespace Sunaoka\Aws\Structures\AutoScaling\CancelInstanceRefresh;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AutoScalingGroupName
 * @property bool|null $WaitForTransitioningInstances
 */
class CancelInstanceRefreshRequest extends Request
{
    /**
     * @param array{
     *     AutoScalingGroupName: string,
     *     WaitForTransitioningInstances?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
