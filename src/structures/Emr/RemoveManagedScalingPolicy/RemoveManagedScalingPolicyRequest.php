<?php

namespace Sunaoka\Aws\Structures\Emr\RemoveManagedScalingPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterId
 */
class RemoveManagedScalingPolicyRequest extends Request
{
    /**
     * @param array{ClusterId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
