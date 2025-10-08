<?php

namespace Sunaoka\Aws\Structures\DirectoryService\DeregisterEventTopic;

trait DeregisterEventTopicTrait
{
    /**
     * @param DeregisterEventTopicRequest $args
     * @return DeregisterEventTopicResponse
     */
    public function deregisterEventTopic(DeregisterEventTopicRequest $args)
    {
        $result = parent::deregisterEventTopic($args->toArray());
        return new DeregisterEventTopicResponse($result->toArray());
    }
}
