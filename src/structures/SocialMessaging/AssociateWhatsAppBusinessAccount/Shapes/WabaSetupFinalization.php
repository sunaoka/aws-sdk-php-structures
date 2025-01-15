<?php

namespace Sunaoka\Aws\Structures\SocialMessaging\AssociateWhatsAppBusinessAccount\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $id
 * @property list<WhatsAppBusinessAccountEventDestination>|null $eventDestinations
 * @property list<Tag>|null $tags
 */
class WabaSetupFinalization extends Shape
{
    /**
     * @param array{
     *     id?: string|null,
     *     eventDestinations?: list<WhatsAppBusinessAccountEventDestination>|null,
     *     tags?: list<Tag>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
