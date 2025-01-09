<?php

namespace Sunaoka\Aws\Structures\Sqs\DeleteMessageBatch;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $QueueUrl
 * @property list<Shapes\DeleteMessageBatchRequestEntry> $Entries
 */
class DeleteMessageBatchRequest extends Request
{
    /**
     * @param array{
     *     QueueUrl: string,
     *     Entries: list<Shapes\DeleteMessageBatchRequestEntry>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
