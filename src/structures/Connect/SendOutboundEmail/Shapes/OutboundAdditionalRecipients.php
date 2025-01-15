<?php

namespace Sunaoka\Aws\Structures\Connect\SendOutboundEmail\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<EmailAddressInfo>|null $CcEmailAddresses
 */
class OutboundAdditionalRecipients extends Shape
{
    /**
     * @param array{CcEmailAddresses?: list<EmailAddressInfo>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
