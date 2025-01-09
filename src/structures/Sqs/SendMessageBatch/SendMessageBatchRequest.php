<?php

namespace Sunaoka\Aws\Structures\Sqs\SendMessageBatch;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $QueueUrl
 * @property list<Shapes\SendMessageBatchRequestEntry> $Entries
 */
class SendMessageBatchRequest extends Request
{
    /**
     * @param array{
     *     QueueUrl: string,
     *     Entries: list<Shapes\SendMessageBatchRequestEntry>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
