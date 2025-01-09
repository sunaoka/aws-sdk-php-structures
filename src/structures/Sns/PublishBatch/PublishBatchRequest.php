<?php

namespace Sunaoka\Aws\Structures\Sns\PublishBatch;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TopicArn
 * @property list<Shapes\PublishBatchRequestEntry> $PublishBatchRequestEntries
 */
class PublishBatchRequest extends Request
{
    /**
     * @param array{
     *     TopicArn: string,
     *     PublishBatchRequestEntries: list<Shapes\PublishBatchRequestEntry>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
