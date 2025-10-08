<?php

namespace Sunaoka\Aws\Structures\Sqs\TagQueue;

trait TagQueueTrait
{
    /**
     * @param TagQueueRequest $args
     * @return void
     */
    public function tagQueue(TagQueueRequest $args)
    {
        parent::tagQueue($args->toArray());
    }
}
