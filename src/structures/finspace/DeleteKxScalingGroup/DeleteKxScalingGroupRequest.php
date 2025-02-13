<?php

namespace Sunaoka\Aws\Structures\finspace\DeleteKxScalingGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $environmentId
 * @property string $scalingGroupName
 * @property string|null $clientToken
 */
class DeleteKxScalingGroupRequest extends Request
{
    /**
     * @param array{
     *     environmentId: string,
     *     scalingGroupName: string,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
