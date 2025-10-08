<?php

namespace Sunaoka\Aws\Structures\CodeCommit\GetCommentsForComparedCommit;

trait GetCommentsForComparedCommitTrait
{
    /**
     * @param GetCommentsForComparedCommitRequest $args
     * @return GetCommentsForComparedCommitResponse
     */
    public function getCommentsForComparedCommit(GetCommentsForComparedCommitRequest $args)
    {
        $result = parent::getCommentsForComparedCommit($args->toArray());
        return new GetCommentsForComparedCommitResponse($result->toArray());
    }
}
