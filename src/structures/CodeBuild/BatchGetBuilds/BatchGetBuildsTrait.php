<?php

namespace Sunaoka\Aws\Structures\CodeBuild\BatchGetBuilds;

trait BatchGetBuildsTrait
{
    /**
     * @param BatchGetBuildsRequest $args
     * @return BatchGetBuildsResponse
     */
    public function batchGetBuilds(BatchGetBuildsRequest $args)
    {
        $result = parent::batchGetBuilds($args->toArray());
        return new BatchGetBuildsResponse($result->toArray());
    }
}
