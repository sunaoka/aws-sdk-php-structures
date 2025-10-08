<?php

namespace Sunaoka\Aws\Structures\Translate\CreateParallelData;

trait CreateParallelDataTrait
{
    /**
     * @param CreateParallelDataRequest $args
     * @return CreateParallelDataResponse
     */
    public function createParallelData(CreateParallelDataRequest $args)
    {
        $result = parent::createParallelData($args->toArray());
        return new CreateParallelDataResponse($result->toArray());
    }
}
