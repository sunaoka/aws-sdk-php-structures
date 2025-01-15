<?php

namespace Sunaoka\Aws\Structures\AutoScaling\DeletePolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $AutoScalingGroupName
 * @property string $PolicyName
 */
class DeletePolicyRequest extends Request
{
    /**
     * @param array{
     *     AutoScalingGroupName?: string|null,
     *     PolicyName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
