<?php

namespace Sunaoka\Aws\Structures\Sqs\SendMessageBatch\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $MessageId
 * @property string $MD5OfMessageBody
 * @property string $MD5OfMessageAttributes
 * @property string $MD5OfMessageSystemAttributes
 * @property string $SequenceNumber
 */
class SendMessageBatchResultEntry extends Shape
{
    /**
     * @param array{
     *     Id: string,
     *     MessageId: string,
     *     MD5OfMessageBody: string,
     *     MD5OfMessageAttributes?: string,
     *     MD5OfMessageSystemAttributes?: string,
     *     SequenceNumber?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
