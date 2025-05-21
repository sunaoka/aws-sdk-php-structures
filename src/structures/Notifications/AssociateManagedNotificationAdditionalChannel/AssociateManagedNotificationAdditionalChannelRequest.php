<?php

namespace Sunaoka\Aws\Structures\Notifications\AssociateManagedNotificationAdditionalChannel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $channelArn
 * @property string $managedNotificationConfigurationArn
 */
class AssociateManagedNotificationAdditionalChannelRequest extends Request
{
    /**
     * @param array{
     *     channelArn: string,
     *     managedNotificationConfigurationArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
