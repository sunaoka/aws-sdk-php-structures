<?php

namespace Sunaoka\Aws\Structures\CodeCommit\CreateCommit;

trait CreateCommitTrait
{
    /**
     * @param CreateCommitRequest $args
     * @return CreateCommitResponse
     */
    public function createCommit(CreateCommitRequest $args)
    {
        $result = parent::createCommit($args->toArray());
        return new CreateCommitResponse($result->toArray());
    }
}
