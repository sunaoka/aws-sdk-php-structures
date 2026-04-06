<?php

namespace Sunaoka\Aws\Structures\RoboMaker\BatchDeleteWorlds;

trait BatchDeleteWorldsTrait
{
    /**
     * @param BatchDeleteWorldsRequest $args
     * @return BatchDeleteWorldsResponse
     */
    public function batchDeleteWorlds(BatchDeleteWorldsRequest $args)
    {
        $result = parent::batchDeleteWorlds($args->toArray());
        return new BatchDeleteWorldsResponse($result->toArray());
    }
}
