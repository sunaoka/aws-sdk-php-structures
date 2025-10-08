<?php

namespace Sunaoka\Aws\Structures\Translate\UpdateParallelData;

trait UpdateParallelDataTrait
{
    /**
     * @param UpdateParallelDataRequest $args
     * @return UpdateParallelDataResponse
     */
    public function updateParallelData(UpdateParallelDataRequest $args)
    {
        $result = parent::updateParallelData($args->toArray());
        return new UpdateParallelDataResponse($result->toArray());
    }
}
