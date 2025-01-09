<?php

namespace Sunaoka\Aws\Structures\Connect\SearchQueues\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $OutboundEmailAddressId
 */
class OutboundEmailConfig extends Shape
{
    /**
     * @param array{OutboundEmailAddressId?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
