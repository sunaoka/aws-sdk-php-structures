<?php

namespace Sunaoka\Aws\Structures\Sqs\SendMessageBatch\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $MessageId
 * @property string $MD5OfMessageBody
 * @property string|null $MD5OfMessageAttributes
 * @property string|null $MD5OfMessageSystemAttributes
 * @property string|null $SequenceNumber
 */
class SendMessageBatchResultEntry extends Shape
{
    /**
     * @param array{
     *     Id: string,
     *     MessageId: string,
     *     MD5OfMessageBody: string,
     *     MD5OfMessageAttributes?: string|null,
     *     MD5OfMessageSystemAttributes?: string|null,
     *     SequenceNumber?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
