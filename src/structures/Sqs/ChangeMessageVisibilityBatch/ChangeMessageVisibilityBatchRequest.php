<?php

namespace Sunaoka\Aws\Structures\Sqs\ChangeMessageVisibilityBatch;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $QueueUrl
 * @property list<Shapes\ChangeMessageVisibilityBatchRequestEntry> $Entries
 */
class ChangeMessageVisibilityBatchRequest extends Request
{
    /**
     * @param array{
     *     QueueUrl: string,
     *     Entries: list<Shapes\ChangeMessageVisibilityBatchRequestEntry>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
