<?php

namespace Sunaoka\Aws\Structures\Kafka\DeleteTopic;

trait DeleteTopicTrait
{
    /**
     * @param DeleteTopicRequest $args
     * @return DeleteTopicResponse
     */
    public function deleteTopic(DeleteTopicRequest $args)
    {
        $result = parent::deleteTopic($args->toArray());
        return new DeleteTopicResponse($result->toArray());
    }
}
