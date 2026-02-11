<?php

namespace Sunaoka\Aws\Structures\Kafka\UpdateTopic;

trait UpdateTopicTrait
{
    /**
     * @param UpdateTopicRequest $args
     * @return UpdateTopicResponse
     */
    public function updateTopic(UpdateTopicRequest $args)
    {
        $result = parent::updateTopic($args->toArray());
        return new UpdateTopicResponse($result->toArray());
    }
}
