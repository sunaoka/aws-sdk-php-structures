<?php

namespace Sunaoka\Aws\Structures\Sqs\PurgeQueue;

trait PurgeQueueTrait
{
    /**
     * @param PurgeQueueRequest $args
     * @return void
     */
    public function purgeQueue(PurgeQueueRequest $args)
    {
        parent::purgeQueue($args->toArray());
    }
}
