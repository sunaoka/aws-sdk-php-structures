<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeContact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<EmailRecipient> $ToList
 * @property list<EmailRecipient> $CcList
 */
class AdditionalEmailRecipients extends Shape
{
    /**
     * @param array{
     *     ToList?: list<EmailRecipient>,
     *     CcList?: list<EmailRecipient>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
