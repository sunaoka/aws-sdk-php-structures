<?php

namespace Sunaoka\Aws\Structures\DirectoryService\RegisterEventTopic;

trait RegisterEventTopicTrait
{
    /**
     * @param RegisterEventTopicRequest $args
     * @return RegisterEventTopicResponse
     */
    public function registerEventTopic(RegisterEventTopicRequest $args)
    {
        $result = parent::registerEventTopic($args->toArray());
        return new RegisterEventTopicResponse($result->toArray());
    }
}
