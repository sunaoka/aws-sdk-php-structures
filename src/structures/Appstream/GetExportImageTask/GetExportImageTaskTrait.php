<?php

namespace Sunaoka\Aws\Structures\Appstream\GetExportImageTask;

trait GetExportImageTaskTrait
{
    /**
     * @param GetExportImageTaskRequest $args
     * @return GetExportImageTaskResponse
     */
    public function getExportImageTask(GetExportImageTaskRequest $args)
    {
        $result = parent::getExportImageTask($args->toArray());
        return new GetExportImageTaskResponse($result->toArray());
    }
}
