<?php

namespace Sunaoka\Aws\Structures\Kafka\CreateTopic;

trait CreateTopicTrait
{
    /**
     * @param CreateTopicRequest $args
     * @return CreateTopicResponse
     */
    public function createTopic(CreateTopicRequest $args)
    {
        $result = parent::createTopic($args->toArray());
        return new CreateTopicResponse($result->toArray());
    }
}
