<?php

namespace Sunaoka\Aws\Structures\Emr\PutManagedScalingPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterId
 * @property Shapes\ManagedScalingPolicy $ManagedScalingPolicy
 */
class PutManagedScalingPolicyRequest extends Request
{
    /**
     * @param array{
     *     ClusterId: string,
     *     ManagedScalingPolicy: Shapes\ManagedScalingPolicy
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
