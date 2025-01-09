<?php

namespace Sunaoka\Aws\Structures\AutoScaling\DeleteNotificationConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AutoScalingGroupName
 * @property string $TopicARN
 */
class DeleteNotificationConfigurationRequest extends Request
{
    /**
     * @param array{
     *     AutoScalingGroupName: string,
     *     TopicARN: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
