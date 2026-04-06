<?php

namespace Sunaoka\Aws\Structures\Appstream\CreateExportImageTask;

trait CreateExportImageTaskTrait
{
    /**
     * @param CreateExportImageTaskRequest $args
     * @return CreateExportImageTaskResponse
     */
    public function createExportImageTask(CreateExportImageTaskRequest $args)
    {
        $result = parent::createExportImageTask($args->toArray());
        return new CreateExportImageTaskResponse($result->toArray());
    }
}
