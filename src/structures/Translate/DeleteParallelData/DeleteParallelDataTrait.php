<?php

namespace Sunaoka\Aws\Structures\Translate\DeleteParallelData;

trait DeleteParallelDataTrait
{
    /**
     * @param DeleteParallelDataRequest $args
     * @return DeleteParallelDataResponse
     */
    public function deleteParallelData(DeleteParallelDataRequest $args)
    {
        $result = parent::deleteParallelData($args->toArray());
        return new DeleteParallelDataResponse($result->toArray());
    }
}
