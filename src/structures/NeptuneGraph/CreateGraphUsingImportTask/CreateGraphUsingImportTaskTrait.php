<?php

namespace Sunaoka\Aws\Structures\NeptuneGraph\CreateGraphUsingImportTask;

trait CreateGraphUsingImportTaskTrait
{
    /**
     * @param CreateGraphUsingImportTaskRequest $args
     * @return CreateGraphUsingImportTaskResponse
     */
    public function createGraphUsingImportTask(CreateGraphUsingImportTaskRequest $args)
    {
        $result = parent::createGraphUsingImportTask($args->toArray());
        return new CreateGraphUsingImportTaskResponse($result->toArray());
    }
}
