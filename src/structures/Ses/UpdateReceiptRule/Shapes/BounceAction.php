<?php

namespace Sunaoka\Aws\Structures\Ses\UpdateReceiptRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TopicArn
 * @property string $SmtpReplyCode
 * @property string $StatusCode
 * @property string $Message
 * @property string $Sender
 */
class BounceAction extends Shape
{
    /**
     * @param array{
     *     TopicArn?: string,
     *     SmtpReplyCode: string,
     *     StatusCode?: string,
     *     Message: string,
     *     Sender: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
