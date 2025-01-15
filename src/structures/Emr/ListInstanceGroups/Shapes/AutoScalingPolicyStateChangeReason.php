<?php

namespace Sunaoka\Aws\Structures\Emr\ListInstanceGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'USER_REQUEST'|'PROVISION_FAILURE'|'CLEANUP_FAILURE'|null $Code
 * @property string|null $Message
 */
class AutoScalingPolicyStateChangeReason extends Shape
{
    /**
     * @param array{
     *     Code?: 'USER_REQUEST'|'PROVISION_FAILURE'|'CLEANUP_FAILURE'|null,
     *     Message?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
