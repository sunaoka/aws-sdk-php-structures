<?php

namespace Sunaoka\Aws\Structures\TimestreamWrite\ResumeBatchLoadTask;

trait ResumeBatchLoadTaskTrait
{
    /**
     * @param ResumeBatchLoadTaskRequest $args
     * @return ResumeBatchLoadTaskResponse
     */
    public function resumeBatchLoadTask(ResumeBatchLoadTaskRequest $args)
    {
        $result = parent::resumeBatchLoadTask($args->toArray());
        return new ResumeBatchLoadTaskResponse($result->toArray());
    }
}
