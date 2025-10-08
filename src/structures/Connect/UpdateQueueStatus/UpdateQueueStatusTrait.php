<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateQueueStatus;

trait UpdateQueueStatusTrait
{
    /**
     * @param UpdateQueueStatusRequest $args
     * @return void
     */
    public function updateQueueStatus(UpdateQueueStatusRequest $args)
    {
        parent::updateQueueStatus($args->toArray());
    }
}
