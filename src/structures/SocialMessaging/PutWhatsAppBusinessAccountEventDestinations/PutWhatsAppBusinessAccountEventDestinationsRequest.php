<?php

namespace Sunaoka\Aws\Structures\SocialMessaging\PutWhatsAppBusinessAccountEventDestinations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 * @property list<Shapes\WhatsAppBusinessAccountEventDestination> $eventDestinations
 */
class PutWhatsAppBusinessAccountEventDestinationsRequest extends Request
{
    /**
     * @param array{
     *     id: string,
     *     eventDestinations: list<Shapes\WhatsAppBusinessAccountEventDestination>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
