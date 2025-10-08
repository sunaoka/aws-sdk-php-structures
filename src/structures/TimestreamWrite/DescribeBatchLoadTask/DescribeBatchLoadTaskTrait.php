<?php

namespace Sunaoka\Aws\Structures\TimestreamWrite\DescribeBatchLoadTask;

trait DescribeBatchLoadTaskTrait
{
    /**
     * @param DescribeBatchLoadTaskRequest $args
     * @return DescribeBatchLoadTaskResponse
     */
    public function describeBatchLoadTask(DescribeBatchLoadTaskRequest $args)
    {
        $result = parent::describeBatchLoadTask($args->toArray());
        return new DescribeBatchLoadTaskResponse($result->toArray());
    }
}
