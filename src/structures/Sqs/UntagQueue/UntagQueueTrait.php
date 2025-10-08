<?php

namespace Sunaoka\Aws\Structures\Sqs\UntagQueue;

trait UntagQueueTrait
{
    /**
     * @param UntagQueueRequest $args
     * @return void
     */
    public function untagQueue(UntagQueueRequest $args)
    {
        parent::untagQueue($args->toArray());
    }
}
