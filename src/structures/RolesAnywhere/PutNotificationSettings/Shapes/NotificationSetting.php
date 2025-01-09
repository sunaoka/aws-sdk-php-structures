<?php

namespace Sunaoka\Aws\Structures\RolesAnywhere\PutNotificationSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ALL' $channel
 * @property bool $enabled
 * @property 'CA_CERTIFICATE_EXPIRY'|'END_ENTITY_CERTIFICATE_EXPIRY' $event
 * @property int $threshold
 */
class NotificationSetting extends Shape
{
    /**
     * @param array{
     *     channel?: 'ALL',
     *     enabled: bool,
     *     event: 'CA_CERTIFICATE_EXPIRY'|'END_ENTITY_CERTIFICATE_EXPIRY',
     *     threshold?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
