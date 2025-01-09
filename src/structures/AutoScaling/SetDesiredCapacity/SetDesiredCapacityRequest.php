<?php

namespace Sunaoka\Aws\Structures\AutoScaling\SetDesiredCapacity;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AutoScalingGroupName
 * @property int $DesiredCapacity
 * @property bool $HonorCooldown
 */
class SetDesiredCapacityRequest extends Request
{
    /**
     * @param array{
     *     AutoScalingGroupName: string,
     *     DesiredCapacity: int,
     *     HonorCooldown?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
