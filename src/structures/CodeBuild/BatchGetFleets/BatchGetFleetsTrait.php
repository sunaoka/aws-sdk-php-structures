<?php

namespace Sunaoka\Aws\Structures\CodeBuild\BatchGetFleets;

trait BatchGetFleetsTrait
{
    /**
     * @param BatchGetFleetsRequest $args
     * @return BatchGetFleetsResponse
     */
    public function batchGetFleets(BatchGetFleetsRequest $args)
    {
        $result = parent::batchGetFleets($args->toArray());
        return new BatchGetFleetsResponse($result->toArray());
    }
}
