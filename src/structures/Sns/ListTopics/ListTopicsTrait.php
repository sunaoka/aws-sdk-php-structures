<?php

namespace Sunaoka\Aws\Structures\Sns\ListTopics;

trait ListTopicsTrait
{
    /**
     * @param ListTopicsRequest $args
     * @return ListTopicsResponse
     */
    public function listTopics(ListTopicsRequest $args)
    {
        $result = parent::listTopics($args->toArray());
        return new ListTopicsResponse($result->toArray());
    }
}
