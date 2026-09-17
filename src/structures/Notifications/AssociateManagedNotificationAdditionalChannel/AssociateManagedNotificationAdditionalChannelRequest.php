<?php

namespace Sunaoka\Aws\Structures\Notifications\AssociateManagedNotificationAdditionalChannel;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $channelArn
 * @property string $managedNotificationConfigurationArn
 * @property bool|null $isSensitiveEventsSubscribed
 */
class AssociateManagedNotificationAdditionalChannelRequest extends Request
{
    /**
     * @param array{
     *     channelArn: string,
     *     managedNotificationConfigurationArn: string,
     *     isSensitiveEventsSubscribed?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
