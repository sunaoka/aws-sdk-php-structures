<?php

namespace Sunaoka\Aws\Structures\RolesAnywhere\ResetNotificationSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ALL' $channel
 * @property 'CA_CERTIFICATE_EXPIRY'|'END_ENTITY_CERTIFICATE_EXPIRY' $event
 */
class NotificationSettingKey extends Shape
{
    /**
     * @param array{
     *     channel?: 'ALL',
     *     event: 'CA_CERTIFICATE_EXPIRY'|'END_ENTITY_CERTIFICATE_EXPIRY'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
