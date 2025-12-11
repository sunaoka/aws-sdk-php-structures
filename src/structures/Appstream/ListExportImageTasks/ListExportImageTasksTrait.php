<?php

namespace Sunaoka\Aws\Structures\Appstream\ListExportImageTasks;

trait ListExportImageTasksTrait
{
    /**
     * @param ListExportImageTasksRequest $args
     * @return ListExportImageTasksResponse
     */
    public function listExportImageTasks(ListExportImageTasksRequest $args)
    {
        $result = parent::listExportImageTasks($args->toArray());
        return new ListExportImageTasksResponse($result->toArray());
    }
}
