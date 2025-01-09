<?php

namespace Sunaoka\Aws\Structures\Connect\StartOutboundEmailContact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<EmailAddressInfo> $CcEmailAddresses
 */
class OutboundAdditionalRecipients extends Shape
{
    /**
     * @param array{CcEmailAddresses?: list<EmailAddressInfo>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
