<?php

namespace Sunaoka\Aws\Structures\finspace\GetKxScalingGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $environmentId
 * @property string $scalingGroupName
 */
class GetKxScalingGroupRequest extends Request
{
    /**
     * @param array{
     *     environmentId: string,
     *     scalingGroupName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
