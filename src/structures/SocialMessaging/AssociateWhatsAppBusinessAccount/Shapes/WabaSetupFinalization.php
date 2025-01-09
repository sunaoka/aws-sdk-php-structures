<?php

namespace Sunaoka\Aws\Structures\SocialMessaging\AssociateWhatsAppBusinessAccount\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property list<WhatsAppBusinessAccountEventDestination> $eventDestinations
 * @property list<Tag> $tags
 */
class WabaSetupFinalization extends Shape
{
    /**
     * @param array{
     *     id?: string,
     *     eventDestinations?: list<WhatsAppBusinessAccountEventDestination>,
     *     tags?: list<Tag>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
