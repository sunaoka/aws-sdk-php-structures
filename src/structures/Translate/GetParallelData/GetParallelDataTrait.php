<?php

namespace Sunaoka\Aws\Structures\Translate\GetParallelData;

trait GetParallelDataTrait
{
    /**
     * @param GetParallelDataRequest $args
     * @return GetParallelDataResponse
     */
    public function getParallelData(GetParallelDataRequest $args)
    {
        $result = parent::getParallelData($args->toArray());
        return new GetParallelDataResponse($result->toArray());
    }
}
