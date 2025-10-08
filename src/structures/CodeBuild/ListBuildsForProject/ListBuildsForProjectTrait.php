<?php

namespace Sunaoka\Aws\Structures\CodeBuild\ListBuildsForProject;

trait ListBuildsForProjectTrait
{
    /**
     * @param ListBuildsForProjectRequest $args
     * @return ListBuildsForProjectResponse
     */
    public function listBuildsForProject(ListBuildsForProjectRequest $args)
    {
        $result = parent::listBuildsForProject($args->toArray());
        return new ListBuildsForProjectResponse($result->toArray());
    }
}
