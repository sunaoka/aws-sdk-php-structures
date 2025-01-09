<?php

namespace Sunaoka\Aws\Structures\Emr\GetManagedScalingPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterId
 */
class GetManagedScalingPolicyRequest extends Request
{
    /**
     * @param array{ClusterId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
