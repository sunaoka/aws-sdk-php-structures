<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateQueueName;

trait UpdateQueueNameTrait
{
    /**
     * @param UpdateQueueNameRequest $args
     * @return void
     */
    public function updateQueueName(UpdateQueueNameRequest $args)
    {
        parent::updateQueueName($args->toArray());
    }
}
