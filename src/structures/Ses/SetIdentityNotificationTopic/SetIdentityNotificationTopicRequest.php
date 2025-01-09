<?php

namespace Sunaoka\Aws\Structures\Ses\SetIdentityNotificationTopic;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Identity
 * @property 'Bounce'|'Complaint'|'Delivery' $NotificationType
 * @property string $SnsTopic
 */
class SetIdentityNotificationTopicRequest extends Request
{
    /**
     * @param array{
     *     Identity: string,
     *     NotificationType: 'Bounce'|'Complaint'|'Delivery',
     *     SnsTopic?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
