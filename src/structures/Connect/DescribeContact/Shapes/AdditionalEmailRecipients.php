<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeContact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<EmailRecipient>|null $ToList
 * @property list<EmailRecipient>|null $CcList
 */
class AdditionalEmailRecipients extends Shape
{
    /**
     * @param array{
     *     ToList?: list<EmailRecipient>|null,
     *     CcList?: list<EmailRecipient>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
