<?php

namespace Sunaoka\Aws\Structures\CodeBuild\BatchDeleteBuilds;

trait BatchDeleteBuildsTrait
{
    /**
     * @param BatchDeleteBuildsRequest $args
     * @return BatchDeleteBuildsResponse
     */
    public function batchDeleteBuilds(BatchDeleteBuildsRequest $args)
    {
        $result = parent::batchDeleteBuilds($args->toArray());
        return new BatchDeleteBuildsResponse($result->toArray());
    }
}
