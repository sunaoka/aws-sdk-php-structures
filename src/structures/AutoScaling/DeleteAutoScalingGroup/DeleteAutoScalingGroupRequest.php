<?php

namespace Sunaoka\Aws\Structures\AutoScaling\DeleteAutoScalingGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AutoScalingGroupName
 * @property bool $ForceDelete
 */
class DeleteAutoScalingGroupRequest extends Request
{
    /**
     * @param array{
     *     AutoScalingGroupName: string,
     *     ForceDelete?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
