<?php

namespace Sunaoka\Aws\Structures\AutoScaling\PutNotificationConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AutoScalingGroupName
 * @property string $TopicARN
 * @property list<string> $NotificationTypes
 */
class PutNotificationConfigurationRequest extends Request
{
    /**
     * @param array{
     *     AutoScalingGroupName: string,
     *     TopicARN: string,
     *     NotificationTypes: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
