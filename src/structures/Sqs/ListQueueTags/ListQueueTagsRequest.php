<?php

namespace Sunaoka\Aws\Structures\Sqs\ListQueueTags;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $QueueUrl
 */
class ListQueueTagsRequest extends Request
{
    /**
     * @param array{QueueUrl: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
