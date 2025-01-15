<?php

namespace Sunaoka\Aws\Structures\Ses\DescribeReceiptRuleSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $TopicArn
 * @property string $SmtpReplyCode
 * @property string|null $StatusCode
 * @property string $Message
 * @property string $Sender
 */
class BounceAction extends Shape
{
    /**
     * @param array{
     *     TopicArn?: string|null,
     *     SmtpReplyCode: string,
     *     StatusCode?: string|null,
     *     Message: string,
     *     Sender: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
