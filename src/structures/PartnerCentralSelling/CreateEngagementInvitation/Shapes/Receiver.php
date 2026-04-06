<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\CreateEngagementInvitation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AccountReceiver|null $Account
 */
class Receiver extends Shape
{
    /**
     * @param array{Account?: AccountReceiver|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
