<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\CreateEngagementInvitation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Message
 * @property Payload $Payload
 * @property Receiver $Receiver
 */
class Invitation extends Shape
{
    /**
     * @param array{
     *     Message: string,
     *     Payload: Payload,
     *     Receiver: Receiver
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
