<?php

namespace Sunaoka\Aws\Structures\Notifications\ListManagedNotificationChannelAssociations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $channelIdentifier
 * @property 'MOBILE'|'CHATBOT'|'EMAIL'|'ACCOUNT_CONTACT' $channelType
 * @property 'ENABLED'|'DISABLED'|null $overrideOption
 */
class ManagedNotificationChannelAssociationSummary extends Shape
{
    /**
     * @param array{
     *     channelIdentifier: string,
     *     channelType: 'MOBILE'|'CHATBOT'|'EMAIL'|'ACCOUNT_CONTACT',
     *     overrideOption?: 'ENABLED'|'DISABLED'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
