<?php

namespace Sunaoka\Aws\Structures\Connect\StartEmailContact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<EmailAddressInfo>|null $ToAddresses
 * @property list<EmailAddressInfo>|null $CcAddresses
 */
class InboundAdditionalRecipients extends Shape
{
    /**
     * @param array{
     *     ToAddresses?: list<EmailAddressInfo>|null,
     *     CcAddresses?: list<EmailAddressInfo>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
