<?php

namespace Sunaoka\Aws\Structures\CodeBuild\ListBuildBatchesForProject;

trait ListBuildBatchesForProjectTrait
{
    /**
     * @param ListBuildBatchesForProjectRequest $args
     * @return ListBuildBatchesForProjectResponse
     */
    public function listBuildBatchesForProject(ListBuildBatchesForProjectRequest $args)
    {
        $result = parent::listBuildBatchesForProject($args->toArray());
        return new ListBuildBatchesForProjectResponse($result->toArray());
    }
}
