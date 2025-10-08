<?php

namespace Sunaoka\Aws\Structures\CodeBuild\ListSharedProjects;

trait ListSharedProjectsTrait
{
    /**
     * @param ListSharedProjectsRequest $args
     * @return ListSharedProjectsResponse
     */
    public function listSharedProjects(ListSharedProjectsRequest $args)
    {
        $result = parent::listSharedProjects($args->toArray());
        return new ListSharedProjectsResponse($result->toArray());
    }
}
