<?php

namespace Sunaoka\Aws\Structures\Notifications\DisassociateManagedNotificationAdditionalChannel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $channelArn
 * @property string $managedNotificationConfigurationArn
 */
class DisassociateManagedNotificationAdditionalChannelRequest extends Request
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
