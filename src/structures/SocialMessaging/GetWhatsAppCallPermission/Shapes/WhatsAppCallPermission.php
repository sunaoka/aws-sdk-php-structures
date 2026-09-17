<?php

namespace Sunaoka\Aws\Structures\SocialMessaging\GetWhatsAppCallPermission\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $status
 * @property \Aws\Api\DateTimeResult|null $expirationTime
 */
class WhatsAppCallPermission extends Shape
{
    /**
     * @param array{
     *     status: string,
     *     expirationTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
