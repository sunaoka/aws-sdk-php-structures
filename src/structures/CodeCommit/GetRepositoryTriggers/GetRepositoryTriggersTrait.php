<?php

namespace Sunaoka\Aws\Structures\CodeCommit\GetRepositoryTriggers;

trait GetRepositoryTriggersTrait
{
    /**
     * @param GetRepositoryTriggersRequest $args
     * @return GetRepositoryTriggersResponse
     */
    public function getRepositoryTriggers(GetRepositoryTriggersRequest $args)
    {
        $result = parent::getRepositoryTriggers($args->toArray());
        return new GetRepositoryTriggersResponse($result->toArray());
    }
}
