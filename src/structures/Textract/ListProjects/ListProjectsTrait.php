<?php

namespace Sunaoka\Aws\Structures\Textract\ListProjects;

trait ListProjectsTrait
{
    /**
     * @param ListProjectsRequest $args
     * @return ListProjectsResponse
     */
    public function listProjects(ListProjectsRequest $args)
    {
        $result = parent::listProjects($args->toArray());
        return new ListProjectsResponse($result->toArray());
    }
}
