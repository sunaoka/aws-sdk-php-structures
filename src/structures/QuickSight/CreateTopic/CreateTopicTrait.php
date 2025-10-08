<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateTopic;

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
