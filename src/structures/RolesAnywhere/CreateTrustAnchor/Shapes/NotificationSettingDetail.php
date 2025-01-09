<?php

namespace Sunaoka\Aws\Structures\RolesAnywhere\CreateTrustAnchor\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ALL' $channel
 * @property string $configuredBy
 * @property bool $enabled
 * @property 'CA_CERTIFICATE_EXPIRY'|'END_ENTITY_CERTIFICATE_EXPIRY' $event
 * @property int<1, 360> $threshold
 */
class NotificationSettingDetail extends Shape
{
    /**
     * @param array{
     *     channel?: 'ALL',
     *     configuredBy?: string,
     *     enabled: bool,
     *     event: 'CA_CERTIFICATE_EXPIRY'|'END_ENTITY_CERTIFICATE_EXPIRY',
     *     threshold?: int<1, 360>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
