<?php

namespace Sunaoka\Aws\Structures\Sns\DeleteTopic;

trait DeleteTopicTrait
{
    /**
     * @param DeleteTopicRequest $args
     * @return void
     */
    public function deleteTopic(DeleteTopicRequest $args)
    {
        parent::deleteTopic($args->toArray());
    }
}
