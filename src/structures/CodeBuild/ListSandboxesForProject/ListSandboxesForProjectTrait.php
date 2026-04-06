<?php

namespace Sunaoka\Aws\Structures\CodeBuild\ListSandboxesForProject;

trait ListSandboxesForProjectTrait
{
    /**
     * @param ListSandboxesForProjectRequest $args
     * @return ListSandboxesForProjectResponse
     */
    public function listSandboxesForProject(ListSandboxesForProjectRequest $args)
    {
        $result = parent::listSandboxesForProject($args->toArray());
        return new ListSandboxesForProjectResponse($result->toArray());
    }
}
