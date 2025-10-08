<?php

namespace Sunaoka\Aws\Structures\TimestreamWrite\CreateBatchLoadTask;

trait CreateBatchLoadTaskTrait
{
    /**
     * @param CreateBatchLoadTaskRequest $args
     * @return CreateBatchLoadTaskResponse
     */
    public function createBatchLoadTask(CreateBatchLoadTaskRequest $args)
    {
        $result = parent::createBatchLoadTask($args->toArray());
        return new CreateBatchLoadTaskResponse($result->toArray());
    }
}
