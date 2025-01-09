<?php

namespace Sunaoka\Aws\Structures\Connect\StartEmailContact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<EmailAddressInfo> $ToAddresses
 * @property list<EmailAddressInfo> $CcAddresses
 */
class InboundAdditionalRecipients extends Shape
{
    /**
     * @param array{
     *     ToAddresses?: list<EmailAddressInfo>,
     *     CcAddresses?: list<EmailAddressInfo>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
