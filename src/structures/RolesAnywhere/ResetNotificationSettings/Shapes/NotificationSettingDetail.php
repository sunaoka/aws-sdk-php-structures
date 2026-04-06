<?php

namespace Sunaoka\Aws\Structures\RolesAnywhere\ResetNotificationSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $enabled
 * @property 'CA_CERTIFICATE_EXPIRY'|'END_ENTITY_CERTIFICATE_EXPIRY' $event
 * @property int<1, 360>|null $threshold
 * @property 'ALL'|null $channel
 * @property string|null $configuredBy
 */
class NotificationSettingDetail extends Shape
{
    /**
     * @param array{
     *     enabled: bool,
     *     event: 'CA_CERTIFICATE_EXPIRY'|'END_ENTITY_CERTIFICATE_EXPIRY',
     *     threshold?: int<1, 360>|null,
     *     channel?: 'ALL'|null,
     *     configuredBy?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
