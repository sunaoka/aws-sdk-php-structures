<?php

namespace Sunaoka\Aws\Structures\Notifications\UpdateManagedNotificationChannelAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $managedNotificationConfigurationArn
 * @property string $channelIdentifier
 * @property bool|null $isSensitiveEventsSubscribed
 */
class UpdateManagedNotificationChannelAssociationRequest extends Request
{
    /**
     * @param array{
     *     managedNotificationConfigurationArn: string,
     *     channelIdentifier: string,
     *     isSensitiveEventsSubscribed?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
