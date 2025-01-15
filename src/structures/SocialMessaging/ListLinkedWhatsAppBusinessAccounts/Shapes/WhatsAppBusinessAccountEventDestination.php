<?php

namespace Sunaoka\Aws\Structures\SocialMessaging\ListLinkedWhatsAppBusinessAccounts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $eventDestinationArn
 * @property string|null $roleArn
 */
class WhatsAppBusinessAccountEventDestination extends Shape
{
    /**
     * @param array{
     *     eventDestinationArn: string,
     *     roleArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
