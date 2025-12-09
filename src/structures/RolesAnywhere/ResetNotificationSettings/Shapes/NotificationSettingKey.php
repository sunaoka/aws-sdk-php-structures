<?php

namespace Sunaoka\Aws\Structures\RolesAnywhere\ResetNotificationSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CA_CERTIFICATE_EXPIRY'|'END_ENTITY_CERTIFICATE_EXPIRY' $event
 * @property 'ALL'|null $channel
 */
class NotificationSettingKey extends Shape
{
    /**
     * @param array{
     *     event: 'CA_CERTIFICATE_EXPIRY'|'END_ENTITY_CERTIFICATE_EXPIRY',
     *     channel?: 'ALL'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
