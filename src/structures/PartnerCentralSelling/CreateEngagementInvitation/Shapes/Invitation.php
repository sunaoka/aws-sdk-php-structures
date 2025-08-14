<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\CreateEngagementInvitation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Message
 * @property Receiver $Receiver
 * @property Payload $Payload
 */
class Invitation extends Shape
{
    /**
     * @param array{
     *     Message: string,
     *     Receiver: Receiver,
     *     Payload: Payload
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
