<?php

namespace Sunaoka\Aws\Structures\CodeBuild\BatchGetProjects;

trait BatchGetProjectsTrait
{
    /**
     * @param BatchGetProjectsRequest $args
     * @return BatchGetProjectsResponse
     */
    public function batchGetProjects(BatchGetProjectsRequest $args)
    {
        $result = parent::batchGetProjects($args->toArray());
        return new BatchGetProjectsResponse($result->toArray());
    }
}
