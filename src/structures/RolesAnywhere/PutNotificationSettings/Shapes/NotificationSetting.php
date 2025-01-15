<?php

namespace Sunaoka\Aws\Structures\RolesAnywhere\PutNotificationSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ALL'|null $channel
 * @property bool $enabled
 * @property 'CA_CERTIFICATE_EXPIRY'|'END_ENTITY_CERTIFICATE_EXPIRY' $event
 * @property int<1, 360>|null $threshold
 */
class NotificationSetting extends Shape
{
    /**
     * @param array{
     *     channel?: 'ALL'|null,
     *     enabled: bool,
     *     event: 'CA_CERTIFICATE_EXPIRY'|'END_ENTITY_CERTIFICATE_EXPIRY',
     *     threshold?: int<1, 360>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
