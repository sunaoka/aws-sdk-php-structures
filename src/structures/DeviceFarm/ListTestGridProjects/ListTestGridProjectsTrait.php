<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\ListTestGridProjects;

trait ListTestGridProjectsTrait
{
    /**
     * @param ListTestGridProjectsRequest $args
     * @return ListTestGridProjectsResponse
     */
    public function listTestGridProjects(ListTestGridProjectsRequest $args)
    {
        $result = parent::listTestGridProjects($args->toArray());
        return new ListTestGridProjectsResponse($result->toArray());
    }
}
