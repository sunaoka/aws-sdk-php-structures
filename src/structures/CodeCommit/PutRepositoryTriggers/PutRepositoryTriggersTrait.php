<?php

namespace Sunaoka\Aws\Structures\CodeCommit\PutRepositoryTriggers;

trait PutRepositoryTriggersTrait
{
    /**
     * @param PutRepositoryTriggersRequest $args
     * @return PutRepositoryTriggersResponse
     */
    public function putRepositoryTriggers(PutRepositoryTriggersRequest $args)
    {
        $result = parent::putRepositoryTriggers($args->toArray());
        return new PutRepositoryTriggersResponse($result->toArray());
    }
}
