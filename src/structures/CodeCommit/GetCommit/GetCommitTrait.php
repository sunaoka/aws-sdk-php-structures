<?php

namespace Sunaoka\Aws\Structures\CodeCommit\GetCommit;

trait GetCommitTrait
{
    /**
     * @param GetCommitRequest $args
     * @return GetCommitResponse
     */
    public function getCommit(GetCommitRequest $args)
    {
        $result = parent::getCommit($args->toArray());
        return new GetCommitResponse($result->toArray());
    }
}
