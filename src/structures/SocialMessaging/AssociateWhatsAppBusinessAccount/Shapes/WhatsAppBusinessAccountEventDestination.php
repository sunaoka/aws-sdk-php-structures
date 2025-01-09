<?php

namespace Sunaoka\Aws\Structures\SocialMessaging\AssociateWhatsAppBusinessAccount\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $eventDestinationArn
 * @property string $roleArn
 */
class WhatsAppBusinessAccountEventDestination extends Shape
{
    /**
     * @param array{
     *     eventDestinationArn: string,
     *     roleArn?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
