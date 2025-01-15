<?php

namespace Sunaoka\Aws\Structures\AutoScaling\DeleteWarmPool;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AutoScalingGroupName
 * @property bool|null $ForceDelete
 */
class DeleteWarmPoolRequest extends Request
{
    /**
     * @param array{
     *     AutoScalingGroupName: string,
     *     ForceDelete?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
