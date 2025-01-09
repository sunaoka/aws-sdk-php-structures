<?php

namespace Sunaoka\Aws\Structures\Emr\ListInstanceGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'USER_REQUEST'|'PROVISION_FAILURE'|'CLEANUP_FAILURE' $Code
 * @property string $Message
 */
class AutoScalingPolicyStateChangeReason extends Shape
{
    /**
     * @param array{
     *     Code?: 'USER_REQUEST'|'PROVISION_FAILURE'|'CLEANUP_FAILURE',
     *     Message?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
