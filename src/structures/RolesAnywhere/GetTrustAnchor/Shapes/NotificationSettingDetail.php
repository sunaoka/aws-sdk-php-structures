<?php

namespace Sunaoka\Aws\Structures\RolesAnywhere\GetTrustAnchor\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ALL' $channel
 * @property string $configuredBy
 * @property bool $enabled
 * @property 'CA_CERTIFICATE_EXPIRY'|'END_ENTITY_CERTIFICATE_EXPIRY' $event
 * @property int $threshold
 */
class NotificationSettingDetail extends Shape
{
    /**
     * @param array{
     *     channel?: 'ALL',
     *     configuredBy?: string,
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
