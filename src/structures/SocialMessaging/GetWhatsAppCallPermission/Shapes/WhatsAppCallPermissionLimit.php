<?php

namespace Sunaoka\Aws\Structures\SocialMessaging\GetWhatsAppCallPermission\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $timePeriod
 * @property int $maxAllowed
 * @property int $currentUsage
 * @property \Aws\Api\DateTimeResult|null $limitExpirationTime
 */
class WhatsAppCallPermissionLimit extends Shape
{
    /**
     * @param array{
     *     timePeriod: string,
     *     maxAllowed: int,
     *     currentUsage: int,
     *     limitExpirationTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
