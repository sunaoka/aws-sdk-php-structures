<?php

namespace Sunaoka\Aws\Structures\Translate\ListParallelData;

trait ListParallelDataTrait
{
    /**
     * @param ListParallelDataRequest $args
     * @return ListParallelDataResponse
     */
    public function listParallelData(ListParallelDataRequest $args)
    {
        $result = parent::listParallelData($args->toArray());
        return new ListParallelDataResponse($result->toArray());
    }
}
